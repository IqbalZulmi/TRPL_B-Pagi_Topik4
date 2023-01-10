<?php

// Include fpdf.php
require('fpdf/fpdf.php');

// Connect to the database
include 'koneksi.php';

// Define the SQL query
$sql = "SELECT * FROM peminjaman where status ='terima' or status = 'tolak'";

// Execute the query and fetch the results
$query = mysqli_query($db, $sql);

// Create a new instance of the FPDF class
$pdf = new FPDF('P', 'mm', 'Legal');
$pdf->SetMargins(8, 8, 8);
$pdf->SetFont('Arial', '', 20);

// Add a page to the PDF document
$pdf->SetAutoPageBreak(false);
$pdf->AddPage('L');

// Add the title to the PDF
$pdf->Cell(0, 20, 'Laporan Peminjaman Ruangan', 0, 1, 'C');

$pdf->SetFont('Arial', '', 9);
// Set the table header row
$pdf->Cell(30, 10, 'No Identitas', 1, 0, 'C');
$pdf->Cell(30, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(40, 10, 'Nama Anggota', 1, 0, 'C');
$pdf->Cell(40, 10, 'Keperluan', 1, 0, 'C');
$pdf->Cell(20, 10, 'Hari', 1, 0, 'C');
$pdf->Cell(20, 10, 'Ruang', 1, 0, 'C');
$pdf->Cell(60, 10, 'Dosen Penanggung Jawab', 1, 0, 'C');
$pdf->Cell(30, 10, 'Tanggal Pinjam', 1, 0, 'C');
$pdf->Cell(20, 10, 'Jam Pinjam', 1, 0, 'C');
$pdf->Cell(25, 10, 'Jam Berakhir', 1, 0, 'C');
$pdf->Cell(20, 10, 'Status', 1, 0, 'C');
$pdf->Ln();

// Set the table data rows
while ($form = mysqli_fetch_array($query)) {
  $pdf->Cell(30, 10, $form['no_identitas'], 1, 0, 'C');
  $pdf->Cell(30, 10, $form['nama'], 1, 0, 'C');
  $pdf->Cell(40, 10, $form['anggota'], 1, 0, 'C');
  $pdf->Cell(40, 10, $form['keperluan'], 1, 0, 'C');
  $pdf->Cell(20, 10, $form['hari'], 1, 0, 'C');
  $pdf->Cell(20, 10, $form['kode_ruangan'], 1, 0, 'C');
  $pdf->Cell(60, 10, $form['dosen_penanggung_jawab'], 1, 0, 'C');
  $pdf->Cell(30, 10, $form['tanggal_peminjaman'], 1, 0, 'C');
  $pdf->Cell(20, 10, $form['jam_pinjaman_awal'], 1, 0, 'C');
  $pdf->Cell(25, 10, $form['jam_pinjaman_akhir'], 1, 0, 'C');
  $pdf->Cell(20, 10, $form['status'], 1, 0, 'C');
  $pdf->Ln();
}

// Output the PDF document
$pdf->Output("laporan_peminjaman.pdf","I");
?>