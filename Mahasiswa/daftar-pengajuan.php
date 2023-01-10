<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIPERU</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Dashboard.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="shortcut icon" href="siperu.png">
  </head>
  <body>
  <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../login-2.php?pesan=gagal");
	}
 
	?>
    <!--Header sidebar-->
    <div class="kontainer">
      <div class="sidebar">
        <div class="header">
          <div class="list-item">
            <a href="Dashboard.php">
              <i class="fa-solid fa-s fa-2x icon"></i>
              <span class="description-header">IPERU</span>
            </a>
          </div>
          <div class="illustration">
            <img src="Siperu.png" alt="" style="width: auto; height: 190px;">
          </div>
        </div>
        <!--Main sidebar-->
        <div class="main">
          <div class="list-item">
            <a href="Dashboard.php" class="active" aria-current="page">
              <i class="fa-solid fa-house fa-lg icon"></i>
              <span class="description">Dashboard</span>
            </a>
          </div>
          <div class="list-item">
            <a href="ruangan.php">
              <i class="fa-solid fa-computer fa-lg icon"></i>
              <span class="description">Ruangan</span>
            </a>
          </div>
          <div class="list-item">
            <a href="Form-Pengajuan.php">
              <i class="fa-solid fa-file-lines fa-lg icon"></i>
              <span class="description">Form Peminjaman</span>
            </a>
          </div>
          <div class="list-item">
            <a href="daftar-Pengajuan.php">
              <i class="fa-solid fa-bell fa-lg icon"></i>
              <span class="description">Status Pengajuan</span>
            </a>
          </div>
          <div class="list-item">
            <a href="peraturan.php">
              <i class="fa-solid fa-circle-info fa-lg icon"></i>
              <span class="description">Peraturan & Alur</span>
            </a>
          </div>
        </div>
      </div>
      <!--Navbar Main-content-->
      <div class="main-content all-content-wrapper ">
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #6f9af7;">
          <div class="container-fluid">
              <div id="menu-button" class="navbar-brand">
              <input type="checkbox" id="menu-checkbox">
              <label for="menu-checkbox" id="menu-label">
                  <div id="hamburger"></div>
              </label>
              </div>
              
              <div class="nav-item dropdown ms-auto me-2">
              </div>
              <div class="nav-item dropdown me-2">
              <button type="button" class="dropbtn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user" style="color: white;"></i> <?php echo $_SESSION['username']; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                  <li><a class="dropdown-item" href="Profile.php">
                  <i class="fa-regular fa-address-card icon"></i>
                  Profiles</a>
                  </li>
                  <li><a class="dropdown-item" href="Change password.php">
                  <i class="fa-solid fa-key icon"></i>
                  Change Password
                  </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">
                  <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                  Log out
                  </a></li>
              </ul>
              </div>
          </div>
          </nav>
          <div class="container-fluid">
          <div class="row bg-light my-2 mx-0 border border-dark border-opacity-25">
            <div class="col-12 p-1 ps-2">
              <h1 id="dash">Daftar Pengajuan Ruangan</h1>
            </div>
          </div>
          <?php
            if (isset($_GET['status'])) {
              if ($_GET['status'] == "sukses") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                  echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                  echo '</svg>';
                  echo '<strong>Pengajuan berhasil!</strong> Status pengajuan dapat dilihat pada menu status pengajuan ini.';
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';
              }
            }
          ?>
          <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
            <div class="col-12 table-responsive-md mt-1">
              <table class="table table-hover text-center table-responsive" width="600px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nama Anggota yang Ikut</th>
                  <th>Keperluan</th>
                  <th>Hari</th>
                  <th>Ruang</th>
                  <th>Dosen Penanggung Jawab</th>
                  <th>Tanggal Pinjam</th>
                  <th>Jam Pinjam</th>
                  <th>Jam Berakhir</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include 'koneksi.php';

                // Retrieve the username from the session variable
                $username = $_SESSION['username'];

                // Retrieve the nidn for the specified username
                $sql = "SELECT nim FROM mahasiswa WHERE username='$username'";
                $result = mysqli_query($db, $sql);

                // If a record was found, use the nidn value as a condition in the peminjaman table query
                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $nim = $row['nim'];
                  $sql = "SELECT * FROM peminjaman WHERE no_identitas='$nim'";
                  $query = mysqli_query($db, $sql);

                  // Generate an HTML table using the data from the peminjaman table
                  $no = 1;
                  while ($form = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$no++."</td>";
                    echo "<td>".$form['no_identitas']."</td>";
                    echo "<td>".$form['nama']."</td>";
                    echo "<td>".$form['anggota']."</td>";
                    echo "<td>".$form['keperluan']."</td>";
                    echo "<td>".$form['hari']."</td>";
                    echo "<td>".$form['kode_ruangan']."</td>";
                    echo "<td>".$form['dosen_penanggung_jawab']."</td>";
                    echo "<td>".$form['tanggal_peminjaman']."</td>";
                    echo "<td>".$form['jam_pinjaman_awal']."</td>";
                    echo "<td>".$form['jam_pinjaman_akhir']."</td>";
                    echo "<td>" . $form['status'] . "</td>";

                    echo "</tr>";
                  }
                }
              ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="hide.js"></script>
    <script src="sidebar.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>