<?php
    include "koneksi.php";
    //proses ganti password
    if (isset($_POST['ganti'])) {
    $username = $_POST['username'];
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konf_password    = $_POST['konf_password'];
    //cek old password
    $query = "SELECT * FROM user WHERE password='$password_lama' and username='$username'";
    $sql = mysqli_query ($db, $query);
    $hasil = mysqli_num_rows ($sql);
    if (! $hasil >= 1) {
        header("location:change-password.php?pesan=lama");
    }
    //validasi data data kosong
    else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
        header("location:change-password.php?pesan=kosong");    
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
        header("location:change-password.php?pesan=tidak_sama");
    }
    else {
    //update data
    $query = "UPDATE user SET password='$password_baru' WHERE username='$username'";
    $sql = mysqli_query ($db, $query);
    //setelah berhasil update
    if ($sql) {
        header("location:change-password.php?pesan=true");    
    } else {
        header("location:change-password.php?pesan=false");
    }
    }
    }
?>

