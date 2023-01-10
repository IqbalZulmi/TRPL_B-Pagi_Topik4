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
                <i class="fa-solid fa-user" style="color: white;"></i> <?php echo $_SESSION['username'];?>
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
              <h1 id="dash">Ruangan</h1>
            </div>
          </div>
          <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
            <div class="col-12 text-center mt-1">
              <i class="fa-solid fa-computer fa-6x icon" style="color:#1a75ff;"></i>
              <p id="selamat">Berikut adalah daftar ruangan yang dapat dipinjam</p>
              <form method="post" action="" id="search-form" class="col-sm-3">
                <input type="search" name="search" placeholder="Cari TA 11.4/Lab" class="form-control" onkeyup="search()">
              </form>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php
                include 'koneksi.php';
                $no = 1;

                // Check if search form was submitted
                if (isset($_POST['search'])) {
                  // Retrieve search query from form
                  $search = mysqli_real_escape_string($db, $_POST['search']);

                  // Modify SELECT statement to use WHERE clause
                  $query = mysqli_query($db, "SELECT * FROM `ruangan` WHERE kode_ruangan LIKE '%$search%' OR nama_ruangan LIKE '%$search%'");
                } else {
                  // If search form was not submitted, retrieve all rooms
                  $query = mysqli_query($db, "SELECT * FROM `ruangan`");
                }
                while ($data = mysqli_fetch_assoc($query)) {
                  
              ?>
                <div class="col">
                  <div class="card">
                    <img src=<?php echo "'foto-ruangan/".$data['foto']."'"?> class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $data['kode_ruangan'];?></h5>
                      <p class="card-text"><?php echo $data['nama_ruangan'];?></p>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $no?>">
                        Lihat Detail
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="detail<?= $no?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Ruangan</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <?php
                            $kode_ruangan = $data['kode_ruangan'];
                            $query1 = mysqli_query($db, "SELECT * FROM ruangan WHERE kode_ruangan='$kode_ruangan'");
                            while ($data1 = mysqli_fetch_assoc($query1)) {
                            ?>
                            <?php echo "Kode ruangan:".$data1['kode_ruangan'].""?>
                            <?php echo "<br>Nama ruangan:".$data1['nama_ruangan'].""?>
                            <?php echo "<br>Lokasi ruangan:".$data1['lokasi'].""?>
                            <?php echo "<br>Laboran:".$data1['nama_laboran'].""?>
                            <?php echo "<br>Status ruangan:".$data1['status'].""?>
                            
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <?php $no++;
                }
                ?>    
            </div>

          </div>
        </div>
      </div>
    </div>
    <script src="search.js"></script>
    <script src="hide.js"></script>
    <script src="sidebar.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>