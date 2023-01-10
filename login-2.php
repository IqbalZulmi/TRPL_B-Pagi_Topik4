<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siperu</title>
    <link rel="stylesheet" href="login 2.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="global-container">
        <img src="Siperu.png" class="d-none d-lg-block">
        <div class="card login-form">
            <div class="card-body">
                <span class="d-md-block d-lg-none text-center">
                    <img src="Siperu.png" style="width: auto; height: 150px;">
                </span>
                <h1 class="card-title text-center">SIPERU</h1>
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert text-center'>Username dan Password tidak sesuai !</div>";
                    }
                }
                ?>
            </div>
            <div class="card-text">
                <form action="proses-login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan password">
                    </div>
                    <div class="forgot mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="d-grid gap-2 col-9 mx-auto">
                        <button type="submit" class="btn btn-outline-info">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>