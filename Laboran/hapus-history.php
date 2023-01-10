<?php

include("koneksi.php");

if( isset($_GET['no_form']) ){

    // ambil id dari query string
    $noform = $_GET['no_form'];

    // buat query hapus
    $sql = "DELETE FROM peminjaman WHERE no_form='$noform'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: history-peminjaman.php?status=berhasil');
    } else {
        header('Location: history-peminjaman.php?status=gagal');
    }

} else {
    die("akses dilarang...");
}

?>