<?php
// include database connection file
include 'koneksi.php';
$nim= $_POST['nim'];
$nama=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];

$foto = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$x = explode('.', $foto);
$ekstensi = strtolower(end($x));
$ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
$tmp_file = $_FILES['foto']['tmp_name'];
$path = "foto-profil/" . $foto;

if(in_array($ekstensi,$ekstensi_diperbolehkan)=== true){
    if($ukuran_file<=10000000){
        if(move_uploaded_file($tmp_file,"$path")){
            //echo "Berhasil Upload Gambar";
            $query = "UPDATE dosen SET email='$email',foto='$foto' WHERE nidn='$nim'";
            $sql = mysqli_query($db, $query);
            if($sql){
                header("location:profile.php");
            }else{
                header("location:profile.php?pesan=false");
            }
        }//jika gambar gagal di upload
    }//jika ukuran lebih besar dari 1 mb
}//jika tipe file bukan jpg,jpeg,dan png
?>