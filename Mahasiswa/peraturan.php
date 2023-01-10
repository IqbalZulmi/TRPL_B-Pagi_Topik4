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
    <link rel="shortcut icon" href="Siperu.png">
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
        <!--Main content-->
        <div class="container-fluid">
          <div class="row bg-light my-2 mx-0 border border-dark border-opacity-25">
            <div class="col-12 p-1 ps-2">
              <h1 id="dash">Peraturan & Alur Peminjaman</h1>
            </div>
          </div>
          <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
            <div class="col-12 text-center mt-1">
                <i class="fa-solid fa-circle-info fa-6x" style="color:#0d6efd ;"></i>
              <p id="selamat">Berikut merupakan peraturan peminjaman :</p>
              <p id="disini" style="text-align: left;">
                1.  Ruangan dan peralatannya digunakan untuk tujuan proses belajar-mengajar yang sesuai dengan perkuliahan. <br>
                2.  Penggunaan Ruangan harus selama jam aktif perkuliahan. <br>
                3.  Lepas alas kaki sebelum masuk Ruangan dan cuci kaki jika dirasa perlu acara tsb. <br>
                4.  Penggunaan Ruangan dan semua peralatannya sesuai dengan fungsinya serta bertanggung jawab. <br>
                5.  Dilarang menggunakan Ruangan dan peralatannya untuk kepentingan non-akademik. <br>
                6.  Peminjaman peralatan keluar Ruangan harus diketahui oleh pengajar /penanggung jawab Ruangan dan harus mengisi boring peminjaman. <br>
                7.  Peminjaman Ruangan untuk kegiatan diluar perkuliahan harus disetujui oleh dosen / pembimbing kegiatan tersebut dan diketahui oleh laboran. <br>
                8.  Semua peralatan Ruangan yang telah digunakan harus dirapikan dan dikembalikan seperti semula. <br>
                9.  Jika ada kendala dalam penggunaan Ruangan dan peralatannya, bisa ditanyakan ke pengajar / laboran.</p> <br>
                
              <img src="Alur peminjaman ruang.png" height="300px" width="400px"> <br>
              <p id="selamat">Berikut ini adalah Tata Cara Peminjaman Ruangan :</p>
              <p id="disini" style="text-align: left;">
                1.  Login. <br>
                2.  Mengisi Form Peminjaman. <br>
                3.  Admin memverifikasi Peminjaman. <br>
                4.  User melihat status Peminjaman di SIPERU (Approve/Reject). <br>
                5.  Mahasiswa menggunakan lab sesuai aturan dan prokes. <br>
                6.  Selesai. </p> <br>
              <a class="btn btn-sm btn-success mb-2" href="Peraturan dan alur Peminjaman Ruangan.docx" style="float: left;">Unduh Peraturan & Alur</a>
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