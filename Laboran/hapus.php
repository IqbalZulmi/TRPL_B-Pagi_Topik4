<?php

include("koneksi.php");

if( isset($_GET['kode_ruangan']) ){

    // ambil id dari query string
    $koderuangan = $_GET['kode_ruangan'];

    // buat query hapus
    $sql = "DELETE FROM ruangan WHERE kode_ruangan='$koderuangan'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: dataruang.php?status=hapus');
    } else {
        header('Location: dataruang.php?status=restrict');
    }

} else {
    die("akses dilarang...");
}

?>