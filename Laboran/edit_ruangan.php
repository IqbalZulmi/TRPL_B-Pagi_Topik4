<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $koderuangan = $_POST['kode_ruangan'];
    $namaruangan = $_POST['nama_ruangan'];
    $lokasi = $_POST['lokasi'];
    $nama_laboran = $_POST['nama_laboran'];
    $status = $_POST['status'];
    $day = $_POST['day'];

    $foto = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
    $tmp_file = $_FILES['foto']['tmp_name'];
    $path = "foto-ruangan/" . $foto;

    // buat query update
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran_file <= 10000000) {
            if (move_uploaded_file($tmp_file, "$path")) {
                echo "berhasil upload gambar";
                $query = "UPDATE ruangan SET nama_ruangan='$namaruangan', lokasi='$lokasi', nama_laboran='$nama_laboran', status='$status', hari='$day', foto='$foto' WHERE kode_ruangan='$koderuangan'";
                $sql = mysqli_query($db, $query);
                if ($sql) {
                    header("Location:dataruang.php?status=edit");
                } else {
                    header("Location:dataruang.php?status=salah");
                }
            }
        }
    }
}
    ?>