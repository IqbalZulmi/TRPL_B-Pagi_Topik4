<?php include("koneksi.php"); ?>

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
    <link rel="shorcut icon" href="siperu.png">
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
                        <h1 id="dash">Data Ruangan</h1>
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
                        else if($_GET['status'] == "berhasil") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                    echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                                echo '</svg>';
                                echo 'Tambah data ruangan baru berhasil!';
                            echo '</div>';
                        }
                        else if ($_GET['status'] == "salah") {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                    echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
                                echo '</svg>';
                                echo 'Terjadi kesalahan!';
                            echo '</div>';
                        }
                        else if ($_GET['status'] == "restrict") {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                    echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
                                echo '</svg>';
                                echo 'Hapus gagal! ruangan sedang diajukan user/hapus riwayat ruangan terkait';
                            echo '</div>';
                        }
                        else if($_GET['status'] == "hapus") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                    echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                                echo '</svg>';
                                echo 'Data ruangan telah berhasil dihapus!';
                            echo '</div>';
                        }
                        else if($_GET['status'] == "edit") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                    echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                                echo '</svg>';
                                echo 'Data ruangan telah berhasil diupdate!';
                            echo '</div>';
                        }
                    }
                ?>
                <div class="row bg-light my-3 mx-0 border border-dark border-opacity-25">
                    <div class="col-12 text-center mt-1">
                        <i class="fa-solid fa-computer fa-6x"></i>
                        <b>
                            <h4 class="text-center font-weight-bold mr-4">Admin Data Ruangan</h4>
                        </b>
                    </div>
                    <a href="ruangan_input.php" class="btn btn-primary mx-3 col-auto">
                        <i class="fas fa-plus-circle mr-2"></i>    
                        Tambah data ruangan
                    </a>
                    <div class="mt-1">
                        <form method="post" action="" id="search-form" class="col-sm-3">
                            <input type="search" name="search" placeholder="Cari TA 11.4/Lab" class="form-control" onkeyup="search()">
                        </form>
                    </div>
                    <form class="row g-2" method="get">
                        <?php
                            $sql = "SELECT * FROM ruangan";
                            $query = mysqli_query($db, $sql);
                        ?>
                        
                        <table class="table table-striped table-responsive mx-1 table-hover text-center border caption-top">
                        <caption><strong>Total ruangan: <?php echo mysqli_num_rows($query) ?></strong></caption>
                            <thead>
                                <tr>
                                    <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th>Lokasi</th>
                                    <th>Laboran</th>
                                    <th>Status</th>
                                    <th>Hari</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_POST['search'])) {
                                    // Retrieve search query from form
                                    $search = mysqli_real_escape_string($db, $_POST['search']);
                                    // Modify SELECT statement to use WHERE clause
                                    $query = mysqli_query($db, "SELECT * FROM `ruangan` WHERE kode_ruangan LIKE '%$search%' OR nama_ruangan LIKE '%$search%'");
                                } else {
                                    // If search form was not submitted, retrieve all rooms
                                    $query = mysqli_query($db, "SELECT * FROM `ruangan`");
                                }

                                while ($ruangan = mysqli_fetch_array($query)) {
                                    echo "<tr>";

                                    echo "<td>".$ruangan['kode_ruangan']."</td>";
                                    echo "<td>".$ruangan['nama_ruangan']."</td>";
                                    echo "<td>".$ruangan['lokasi']."</td>";
                                    echo "<td>".$ruangan['nama_laboran']."</td>";
                                    echo "<td>".$ruangan['status']."</td>";
                                    echo "<td>".$ruangan['hari']."</td>";
                                    echo "<td>".$ruangan['foto']."</td>";

                                    echo "<td>";
                                    echo "<a href='edit.php?kode_ruangan=".$ruangan['kode_ruangan']."' class='btn btn-sm btn-warning'>Edit</a> | ";
                                    echo "<a href='hapus.php?kode_ruangan=".$ruangan['kode_ruangan']."' class='btn btn-sm btn-danger'>Hapus</a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="search.js"></script>
    <script src="sidebar.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>