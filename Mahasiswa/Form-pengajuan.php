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
            <a href="Dashboard.html">
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
              <h1 id="dash">Form Peminjaman</h1>
            </div>
          </div>
          <?php
            if (isset($_GET['status'])) {
              if ($_GET['status'] == "gagal") {
                echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
                  echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />';
                  echo '</svg>';
                  echo '<div>';
                    echo 'Pengajuan peminjaman gagal';
                  echo '</div>';
                echo '</div>';
              }
            }
          ?>   
          <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
            <div class="col-12 text-center mt-1">
              <i class="fa-solid fa-file-lines fa-6x"></i>
            </div>
            <div class="col-md-12 my-1">
            <?php include 'koneksi.php';
                $abc = $_SESSION['username'];
                $sql = "SELECT * FROM mahasiswa where username='$abc'";
                $query = mysqli_query($db, $sql);

                while ($form = mysqli_fetch_array($query)) {
                ?>
              <form class="form-horizontal" method="post" action="input_pengajuan.php">
                <h5><b>Form Peminjaman Ruangan</b></h5>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="nim" class="col-sm-4 control-label">Nomor Induk Mahasiswa</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?php echo $form['nim'];?>" readonly required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="nama_mahasiswa" class="col-sm-4 control-label">Nama Lengkap</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama" value="<?php echo $form['nama_mahasiswa'];?>" readonly required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="anggota" class="col-sm-4 control-label">Nama-nama Anggota yang Ikut</label>
                    <div class="col-sm-7">
                      <textarea name="anggota" class="form-control" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="keperluan" class="col-sm-4 control-label">Keperluan</label>
                    <div class="col-sm-7">
                      <textarea name="keperluan" class="form-control" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="hari" class="col-sm-4 control-label">Hari</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="hari" id="hari" required>
                        <option>[Pilih Hari]</option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="kode_ruangan" class="col-sm-4 control-label">Ruang Peminjaman</label>
                    <div class="col-sm-7" id="room-options">
                      <select name="kode_ruangan" id="ruang" class='form-control' required>
                        <option>[Pilih Ruangan]</option>
                      </select>
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="dosen_penanggung_jawab" class="col-sm-4 control-label">Penanggung Jawab</label>
                    <div class="col-sm-7">
                    <select name='dosen_penanggung_jawab' class='form-control' required>
                      <option value="">[Pilih Dosen]</option>
                    <?php
                        include 'koneksi.php';
                        $query= mysqli_query($db,"SELECT * FROM dosen");
                        while ($data = mysqli_fetch_array($query)) {
                      ?>
                      <option value="<?php echo $data['username'];?>"><?php echo $data['nama_dosen'];?></option>
                      <?php
                      }
                      ?> 
                    </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="tanggal_peminjaman" class="col-sm-4 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-7" id="sandbox-container">
                      <div class="input-group">
                        <input name="tanggal_peminjaman" type="date" class="form-control date">
                        <span class="input-group-addon glyphicon glyphicon-calendar"></span>
                      </div>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="jam_pinjaman_awal" class="col-sm-4 control-label">Jam Mulai Peminjaman</label>
                    <div class="col-sm-7 bootstrap-timepicker">
                      <div class="input-group">
                        <input type="time" class="form-control timepicker" name="jam_pinjaman_awal" required>
                        <span class="input-group-addon glyphicon glyphicon-time"></span>
                      </div>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row my-2">
                    <label for="jam_pinjaman_akhir" class="col-sm-4 control-label">Jam Berakhir Peminjaman</label>
                    <div class="col-sm-7 bootstrap-timepicker">
                      <div class="input-group">
                        <input type="time" class="form-control timepicker" name="jam_pinjaman_akhir" requireds>
                        <span class="input-group-addon glyphicon glyphicon-time"></span>
                      </div>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-7">
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
                  </div>
                </div>
                <?php
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script src="hide.js"></script>
    <script src="filter.js"></script>
    <script src="sidebar.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>