<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SIPERU</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Dashboard.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
                <h1 id="dash">Change Password</h1>
                </div>
            </div>
            <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "lama") {
                        echo '<div class="alert alert-warning d-flex align-items-center" role="alert">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />';
                            echo '</svg>';
                            echo '<div>';
                                echo 'Password lama tidak sesuai';
                            echo '</div>';
                        echo '</div>';
                    }
                    else if ($_GET['pesan'] == "kosong"){
                        echo '<div class="alert alert-warning d-flex align-items-center" role="alert">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />';
                            echo '</svg>';
                            echo '<div>';
                                echo 'Ganti password gagal! Data tidak boleh kosong';
                            echo '</div>';
                        echo '</div>';
                    }
                    else if ($_GET['pesan'] == "tidak_sama"){
                        echo '<div class="alert alert-warning d-flex align-items-center" role="alert">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />';
                            echo '</svg>';
                            echo '<div>';
                                echo 'Ganti password gagal! Password baru dan konfirmasi password baru harus sama';
                            echo '</div>';
                        echo '</div>';
                    }
                    else if ($_GET['pesan'] == "true"){
                        echo '<div class="alert alert-success d-flex align-items-center" role="alert">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
                            echo '</svg>';
                            echo '<div>';
                                echo 'Password berhasil diganti!';
                            echo '</div>';
                        echo '</div>';
                    }
                    else if ($_GET['pesan'] == "false"){
                        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                                echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />';
                            echo '</svg>';
                            echo '<div>';
                                echo 'Ganti password gagal!';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
            <form action="proses-change.php" method="post">
            <div class="row bg-light my-3 gy-2 mx-0 border border-dark border-opacity-25">
                <div class="col-sm-12">
                    <input type="hidden" name="username" class="form-control" id="inputpassword" placeholder="Username" value="<?php echo $_SESSION['username'];?>" readonly>
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Recent Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password_lama" class="form-control" id="inputpassword" placeholder="Recent password" required>
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password_baru" class="form-control" id="inputpassword" placeholder="New Password" required>
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Repeat Password</label>
                <div class="col-sm-10">
                    <input type="password" name="konf_password" class="form-control" id="inputpassword" placeholder="Repeat New Password" required>
                </div>
                <div class="col-sm-12 my-3 text-center">
                    <button name="ganti" class="btn btn-success">Change Password</button>
                </div>
                </form>
            </div>
        </div>
        </div>
        <script src="sidebar.js"></script>
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>