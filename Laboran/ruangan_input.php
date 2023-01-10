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
            <div class="sidebar hide">
                <div class="header">
                    <div class="list-item">
                        <a href="Verifikasi.php">
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
                        <a href="Verifikasi.php" class="active" aria-current="page">
                            <i class="fa-solid fa-square-check fa-lg icon"></i>
                            <span class="description">Verifikasi</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="dataruang.php">
                            <i class="fa-solid fa-computer fa-lg icon"></i>
                            <span class="description">Data Ruangan</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="History-peminjaman.php">
                            <i class="fa-solid fa-clock-rotate-left fa-lg icon"></i>
                            <span class="description">Riwayat</span>
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
                        <h1 id="dash">Input Data Ruangan</h1>
                    </div>
                </div>
                <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
                    <div class="col-12 text-center mt-1">
                        <i class="fa-solid fa-computer fa-6x"></i>
                        <b>
                            <h4 class="text-center font-weight-bold mr-4">Halaman Admin Input Data Ruangan</h4>
                        </b>
                        <div class="mb-3 col-sm-12">
                            <a href="dataruang.php" class="btn btn-primary">
                                << Kembali
                            </a>
                        </div>
                        <form action="input_ruangan.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="kode_ruangan" class="col-sm-2 col-form-label">Kode Ruangan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="kode_ruangan" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nama_ruangan" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-7">
                                    <select name="lokasi" class="form-control" required>
                                        <option>Gedung Utama</option>
                                        <option>Tower A</option>
                                        <option>Gedung RTF</option>
                                        <option>Technopreneur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kode_laboran" class="col-sm-2 col-form-label">Nama Laboran</label>
                                <div class="col-sm-7">
                                    <select name="nama_laboran" class="form-control" required>
                                    <?php
                                        include 'koneksi.php';
                                        $query= mysqli_query($db,"SELECT * FROM laboran");
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?php echo $data['username'];?>"><?php echo $data['nama_laboran'];?></option>
                                    <?php
                                    }
                                    ?> 
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-7">
                                    <select name="status" class="form-control" required>
                                        <option>available</option>
                                        <option>not available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="day" class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="day" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-7">
                                    <input type="file" class="form-control" name="foto" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-7">
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="sidebar.js"></script>
            <script src="js/jquery-3.6.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </body>

</html>