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
		$this->Cell(180,10,'PT Traveloka Jl. Kubu Gunung Tegal Jaya Telp: 0361-888 8888 Web : www.traveloke.com',1,0,'C');
	}
}

// intance object dan memberikan pengaturan halaman PDF
// Pengaturan Ukuran Kertas
$pdf = new PDF('l','mm','A5');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();
$pdf->Image('logo.jpg',90,50,50,50,'JPG');
$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'Tiket Elektronik',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell($lebar_kertas-20,5,'PT. Travela',0,1,'L');
$pdf->Line(10,20,$lebar_kertas-20,20,'C');

$pdf->Cell(1,5,'',0,1); // Beri Jarak Baris Kosong
// Header Tabel
$id=$_GET['id'];
$sql="select reservation.*,rute.rute_from,rute.rute_to,transportation.description,customer.name from reservation,rute,transportation,customer where reservation.ruteid=rute.id and rute.transportationid=transportation.id and reservation.id=$id and reservation.customer_id=customer.id";
$perintah=mysqli_query($koneksi,$sql);
$kolom=mysqli_fetch_array($perintah);

$kol1=45;
$kol2=45;
$kol3=45;
$kol4=45;
$pdf->SetFont('Arial','',10);
$pdf->Cell($kol1,5,'No Pemesanan',0,0,'L');
$pdf->Cell($kol2,5,': '.$kolom['reservation_code'],0,0,'L');
$pdf->Cell($kol3,5,'Tanggal Berangkat',0,0,'L');
$pdf->Cell($kol4,5,': '.$kolom['tgl_berangkat'],0,1,'L');

$pdf->Cell($kol1,5,'Nama Penumpang',0,0,'L');
$pdf->Cell($kol2,5,': '.$kolom['name'],0,0,'L');
$pdf->Cell($kol3,5,'Jam Berangkat',0,0,'L');
$pdf->Cell($kol4,5,': '.$kolom['jam_berangkat'],0,1,'L');

// Menambahkan Baris Kosong
$pdf->Cell(0,10,'',0,1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell($kol1,5,'Nama Perusahaan',1,0,'C');
$pdf->Cell($kol2,5,'Nomor Kursi',1,0,'C');
$pdf->Cell($kol3,5,'Rute Asal',1,0,'C');
$pdf->Cell($kol4,5,'Rute Tujuan',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell($kol1,25,$kolom['description'],1,0,'L');
$pdf->Cell($kol2,25,$kolom['seat_code'],1,0,'L');
$pdf->Cell($kol3,25,$kolom['rute_from'],1,0,'L');
$pdf->Cell($kol4,25,$kolom['rute_to'],1,1,'L');

$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,45,'',0,1,'L');
$pdf->Cell(180,5,'Catatan : Pastikan andan menunjukkan tiket ini kepada petugas baik dalam bentuk cetak ataupun elektronik pada saat proses check-in',0,1,'L');





$pdf->Output();
?>
