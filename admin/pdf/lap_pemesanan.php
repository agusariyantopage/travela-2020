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
$pdf = new PDF('l','mm','A4');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();
$panjang_kertas=$pdf->GetPageHeight();
$pdf->Image('logo.png',$lebar_kertas/4,$panjang_kertas/4,$lebar_kertas/2,$panjang_kertas/2,'PNG');
$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'Laporan Data Pemesanan',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell($lebar_kertas-20,5,'PT. Travela',0,1,'L');
$pdf->Line(10,20,$lebar_kertas-20,20,'C');

$pdf->Cell(1,5,'',0,1); // Beri Jarak Baris Kosong
// Header Tabel
$kol1=10;
$kol2=20;
$kol3=40;
$kol4=30;
$kol5=20;
$kol6=30;
$kol7=40;
$kol8=37;
$kol9=20;
$kol10=20;
$pdf->SetFont('Arial','B',10);
$pdf->Cell($kol1,5,'No',1,0,'C');
$pdf->Cell($kol2,5,'Kode',1,0,'C');
$pdf->Cell($kol3,5,'Tempat Pemesanan',1,0,'C');
$pdf->Cell($kol4,5,'Tanggal Pesan',1,0,'C');
$pdf->Cell($kol5,5,'ID Plg',1,0,'C');
$pdf->Cell($kol6,5,'Kode Kursi',1,0,'C');
$pdf->Cell($kol7,5,'ID Rute',1,0,'C');
$pdf->Cell($kol8,5,'ID Keberangkatan',1,0,'C');
$pdf->Cell($kol9,5,'Harga',1,0,'C');
$pdf->Cell($kol10,5,'ID User',1,1,'C');
// Isi Tabel
$sql="select * from reservation";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
	$pdf->SetFont('Arial','',8);
	$pdf->Cell($kol1,5,$r['id'],1,0,'L');
	$pdf->Cell($kol2,5,$r['reservation_code'],1,0,'L');
	$pdf->Cell($kol3,5,$r['reservation_at'],1,0,'L');
	$pdf->Cell($kol4,5,$r['reservation_date'],1,0,'L');
	$pdf->Cell($kol5,5,$r['customer_id'],1,0,'L');
	$pdf->Cell($kol6,5,$r['seat_code'],1,0,'L');
	$pdf->Cell($kol7,5,$r['ruteid'],1,0,'L');
	$pdf->Cell($kol8,5,$r['depart_id'],1,0,'L');
	$pdf->Cell($kol9,5,$r['price'],1,0,'R');
	$pdf->Cell($kol10,5,$r['userid'],1,1,'L');	
}	


$pdf->Output();
?>
