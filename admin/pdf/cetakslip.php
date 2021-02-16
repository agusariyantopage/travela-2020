<?php

include "fungsi_rupiah.php";
$idk= $_GET['id'];
$lbg= $_GET['lembaga'];
$thn= $_GET['tahun'];
$bln= $_GET['bulan'];
$passwd= $_GET['passwd'];

// memanggil library FPDF
require('fpdf.php');
class PDF extends FPDF
{
	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		// Page number
		$this->Cell(0,10,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// intance object dan memberikan pengaturan halaman PDF
$pdf = new PDF('p','mm','A5');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'YAYASAN TRIATMA SURYA JAYA',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell($lebar_kertas-20,5,'SLIP GAJI KARYAWAN',0,1,'C');
$pdf->Cell($lebar_kertas-20,5,$lbg,0,1,'C');
// $pdf->Line(0,27,$lebar_kertas,27);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,4,'',0,1);

$lebar_kolom1=40;
$lebar_kolom2=60;
$lebar_kolom3=30;

include "koneksi.php";
// Script Ambil Data
if ($lbg=='MAPINDO') {
	$logo="./img/logo_mapindo.bmp";
	$sql=mysqli_query($conn,"select karyawan.*,histori_gaji_mapindo.*,histori_gaji_mapindo.uang_makan,histori_gaji_mapindo.gaji_pokok from karyawan,histori_gaji_mapindo where password='$passwd' and histori_gaji_mapindo.id_karyawan=karyawan.id_karyawan and tahun='$thn' and bulan='$bln' and karyawan.id_karyawan='$idk' order by karyawan.nama asc");
} elseif ($lbg=='STIE') {
	$logo="./img/logo_stie.bmp";
	$sql=mysqli_query($conn,"select karyawan.*,histori_gaji_stie.*,histori_gaji_stie.uang_makan,histori_gaji_stie.gaji_pokok from karyawan,histori_gaji_stie	where password='$passwd' and  histori_gaji_stie.id_karyawan=karyawan.id_karyawan and tahun='$thn' and bulan='$bln' and karyawan.id_karyawan='$idk' order by karyawan.nama asc");
} elseif ($lbg=='SMK') {
	$logo="./img/logo_stie.bmp";
	$sql=mysqli_query($conn,"select karyawan.*,histori_gaji_smk.*,histori_gaji_smk.uang_makan,histori_gaji_smk.gaji_pokok from karyawan,histori_gaji_smk where password='$passwd' and  histori_gaji_smk.id_karyawan=karyawan.id_karyawan and tahun='$thn' and bulan='$bln' and karyawan.id_karyawan='$idk' order by karyawan.nama asc");
} else {
	//echo $idk;	
	$logo="./img/logo_stipar.bmp";
	$sql=mysqli_query($conn,"select karyawan.*,histori_gaji_stipar.*,histori_gaji_stipar.uang_makan,histori_gaji_stipar.gaji_pokok from karyawan,histori_gaji_stipar where password='$passwd' and histori_gaji_stipar.id_karyawan=karyawan.id_karyawan and tahun='$thn' and bulan='$bln' and karyawan.id_karyawan='$idk' order by karyawan.nama asc");	
}
$data01=mysqli_fetch_array($sql);

$pdf->SetFont('Arial','',9);
$pdf->Cell($lebar_kolom1,4,'Periode',0,0,'L');
$pdf->Cell($lebar_kolom2,4,$data01['bulan']." ".$data01['tahun'],0,1,'L');
$pdf->Cell($lebar_kolom1,4,'Nama',0,0,'L');
$pdf->Cell($lebar_kolom2,4,$data01['nama'],0,1,'L');
$pdf->Cell($lebar_kolom1,4,'Jabatan',0,0,'L');
$pdf->Cell($lebar_kolom2,4,$data01['jabatan'],0,1,'L');
$pdf->Cell($lebar_kolom1,4,'Golongan',0,0,'L');
$pdf->Cell($lebar_kolom2,4,$data01['golongan'],0,1,'L');
$pdf->Cell($lebar_kolom1,4,'Masa Kerja',0,0,'L');
$pdf->Cell($lebar_kolom2,4,$data01['masa_kerja'],0,1,'L');
$pdf->Cell($lebar_kolom1,4,'Gaji Pokok',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($data01['gaji_pokok']),0,1,'R');
$pdf->Cell($lebar_kolom1,4,'Tunjangan Jabatan',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($data01['tunjangan_jabatan']),0,1,'R');
$pdf->Cell($lebar_kolom1,4,'Tunjangan Lain',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($data01['tunjangan_lain']),0,1,'R');

$total=0;
$total=$data01['gaji_pokok']+$data01['tunjangan_jabatan']+$data01['tunjangan_lain'];

$pdf->SetFont('Arial','B',9);
$pdf->Cell($lebar_kolom2,4,'Tambahan',0,1,'L');

$pdf->SetFont('Arial','',9);
$tunj=mysqli_query($conn,"select * from tunjangan where lembaga='$lbg'");
while($row=mysqli_fetch_array($tunj)){
	$jml_tunj=$row['tabel'];
	$total=$total+$data01[$jml_tunj];
	$pdf->Cell($lebar_kolom1,4,$row['tunjangan'],0,0,'L');
	$pdf->Cell($lebar_kolom2,4,format_rupiah($data01[$jml_tunj]),0,1,'R');
}
$pdf->Cell($lebar_kolom1+$lebar_kolom2,1,'','T',1,'R');
$pdf->Cell($lebar_kolom1,4,'TOTAL KOTOR',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($total),0,1,'R');
$pdf->Cell($lebar_kolom1+$lebar_kolom2,1,'','T',1,'R');

$pdf->SetFont('Arial','B',9);
$pdf->Cell($lebar_kolom2,4,'Potongan',0,1,'L');

$potongan=0;
$pdf->SetFont('Arial','',9);
$pot=mysqli_query($conn,"select * from potongan where lembaga='$lbg'");
while($rows=mysqli_fetch_array($pot)){
	$jml_pot=trim($rows['tabel']);
	$potongan=$potongan+$data01[$jml_pot];
	$pdf->Cell($lebar_kolom1,4,$rows['potongan'],0,0,'L');
	$pdf->Cell($lebar_kolom2,4,format_rupiah($data01[$jml_pot]),0,1,'R');
}
$pdf->Cell($lebar_kolom1+$lebar_kolom2,1,'','T',1,'R');
$pdf->Cell($lebar_kolom1,4,'TOTAL POTONGAN',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($potongan),0,1,'R');
$pdf->Cell($lebar_kolom1+$lebar_kolom2,1,'','T',1,'R');
$pdf->Cell($lebar_kolom1,4,'TOTAL BERSIH',0,0,'L');
$pdf->Cell($lebar_kolom2,4,format_rupiah($total-$potongan),0,1,'R');
$pdf->Cell($lebar_kolom1+$lebar_kolom2,1,'','T',1,'R');

$pdf->Output();
?>
