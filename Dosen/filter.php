<?php
// Buat koneksi ke database MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'siperu';
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek apakah ada data yang dikirimkan dari client menggunakan metode HTTP POST
if (isset($_POST['hari'])) {
    // Ambil data yang dikirimkan dari client
    $hari = mysqli_real_escape_string($koneksi, $_POST['hari']);

    // Tulis perintah SQL untuk mengambil data dari database
    $sql = "SELECT * FROM ruangan WHERE status='available' AND hari LIKE '%$hari%'";

    // Jalankan perintah SQL
    $query = mysqli_query($koneksi, $sql);

    // Buat array untuk menampung data yang akan dikirimkan ke client
    $data = array();

    // Ambil data satu per satu
    while ($row = mysqli_fetch_array($query)) {
        $data[] = array(
        'kode_ruangan' => $row['kode_ruangan']
        );
    }

    // Kirim data ke client menggunakan format JSON
    echo json_encode($data);
    exit;
}
?>