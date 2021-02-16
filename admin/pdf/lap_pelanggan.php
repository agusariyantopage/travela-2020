<?php
include "koneksi.php";

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
// Pengaturan Ukuran Kertas
$pdf = new PDF('p','mm','A4');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();
$pdf->Image('logo.jpg',190,0,20,20,'JPG');
$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'Laporan Data Pelanggan',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell($lebar_kertas-20,5,'PT. Travela',0,1,'L');
$pdf->Line(10,20,$lebar_kertas-20,20,'C');

$pdf->Cell(1,5,'',0,1); // Beri Jarak Baris Kosong
// Header Tabel
$kol1=10;
$kol2=50;
$kol3=60;
$kol4=30;
$kol5=30;
$pdf->SetFont('Arial','B',10);
$pdf->Cell($kol1,5,'No',1,0,'C');
$pdf->Cell($kol2,5,'Nama',1,0,'C');
$pdf->Cell($kol3,5,'Alamat',1,0,'C');
$pdf->Cell($kol4,5,'No. Handphone',1,0,'C');
$pdf->Cell($kol5,5,'Jenis Kelamin',1,1,'C');
// Isi Tabel
$sql="select * from customer";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
	$pdf->SetFont('Arial','',8);
	$pdf->Cell($kol1,5,$r['id'],1,0,'L');
	$pdf->Cell($kol2,5,$r['name'],1,0,'L');
	$pdf->Cell($kol3,5,$r['address'],1,0,'L');
	$pdf->Cell($kol4,5,$r['phone'],1,0,'L');
	$pdf->Cell($kol5,5,$r['gender'],1,1,'L');
}	


$pdf->Output();
?>
