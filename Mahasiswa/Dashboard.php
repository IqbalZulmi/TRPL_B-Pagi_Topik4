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
    <link rel="shorcut icon" href="Siperu.png">
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
              <span class="description-header">SIPERU</span>
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
      <div class="main-content all-content-wrapper">
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
                  <li><a class="dropdown-item" href="Change-password.php">
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
              <h1 id="dash">Dashboard</h1>
            </div>
          </div>
          <?php
            if (isset($_GET['status'])) {
              if ($_GET['status'] == "sukses") {
                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                  echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                  echo '</svg>';
                  echo '<strong>Halo '.$_SESSION["username"].'!</strong> Anda telah berhasil login sebagai '.$_SESSION["level"];
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';
              }
            }
          ?>
          <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
            <div class="col-12 text-center mt-1">
              <i class="fa-solid fa-file-lines fa-6x"></i>
              <p id="selamat">Selamat datang di Aplikasi Peminjaman Ruangan dan Laboratorium</p>
              <p id="disini">Di sini Anda dapat melakukan pengajuan peminjaman Ruangan dan Laboratorium</p>
            </div>
            <div class="col-md-6 my-2">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>   
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                    <img src="foto-ruangan/604.1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <img src="foto-ruangan/704.1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <img src="foto-ruangan/LabClayModellingTF4(2).jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <img src="foto-ruangan/LabVR2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <img src="foto-ruangan/LabAnimasi(1).jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-md-6 my-2">
              <p id="adalah">SIPERU adalah aplikasi berbasis web yang akan memudahkan semua user politeknik negeri Batam dalam lingkup jurusan Teknik informatika untuk melakukan peminjaman ruangan dan laboratorium.</p>
              <div class="btn-group">
                <a href="Form-Pengajuan.php" class="btn btn-outline-info" aria-current="page">Ajukan Peminjaman!</a>
                <a href="ruangan.php" class="btn btn-outline-info">Lihat ruangan</a>
                <a href="peraturan.php" class="btn btn-outline-info">Lihat Peraturan dan Alur Peminjaman</a>
              </div>
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