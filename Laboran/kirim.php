<?php include 'koneksi.php';

if (isset($_POST['submit'])) {
    $noform = $_POST['no_form'];
    $status = $_POST['status'];
    $sql = "UPDATE peminjaman SET status='$status' WHERE no_form='$noform'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: verifikasi.php?status=sukses');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: verifikasi.php?status=gagal');
    }
}else {
die("Akses dilarang...");
}

?>