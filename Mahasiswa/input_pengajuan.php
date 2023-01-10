<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mahasiswa'];
    $anggota = $_POST['anggota'];
    $keperluan = $_POST['keperluan'];
    $hari = $_POST['hari'];
    $koderuangan = $_POST['kode_ruangan'];
    $dosen = $_POST['dosen_penanggung_jawab'];
    $tanggal = $_POST['tanggal_peminjaman'];
    $awal = $_POST['jam_pinjaman_awal'];
    $akhir = $_POST['jam_pinjaman_akhir'];

    // buat query
    $sql = "INSERT INTO peminjaman (no_identitas, nama, anggota, keperluan, hari, kode_ruangan, dosen_penanggung_jawab, tanggal_peminjaman, jam_pinjaman_awal, jam_pinjaman_akhir) VALUE ('$nim', '$nama', '$anggota', '$keperluan','$hari', '$koderuangan', '$dosen', '$tanggal', '$awal', '$akhir')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: daftar-pengajuan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-pengajuan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>