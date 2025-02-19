<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Oristore</title>
    <link rel="stylesheet" href="assets/css/bootstrapcss/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- AOS MASTER -->
    <link rel="stylesheet" href="assets/css/aos-master/aos-master/dist/aos.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

</head>

<body>

    <?php
    if (isset($_GET['auth']) && $_GET['auth'] == 0) {
    ?>
        <div class="alert alert-danger" role="alert">
            username atau password salah!
        </div>
    <?php
    } elseif (isset($_GET['auth']) && $_GET['auth'] == 'forbidden') {
    ?>
        <div class="alert alert-danger text-center w-100 text-uppercase" role="alert">
            anda tidak punya izin ke halaman tersebut
        </div>
    <?php
    }
    ?>

    <div class="container vh-100 ">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <form action="config/ceklogin.php" method="post">
                    <div class="border border-2 shadow-lg p-4 rounded">
                        <a href="index"><i class="fa fa-long-arrow-left" aria-hidden="true"> Back Home</i></a>
                        <div class="container mb-5 d-inline">
                            <div class="my-2">
                                <h1 class="fw-bold text-center text-uppercase text-warning outline-dark">OriStore</h1>
                            </div>
                            <div class="mb-2">
                                <h1 class="text-uppercase fw-bold text-center fs-2">Login</h1>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mx-3 my-2">
                                <label for="username" class="form-label fs-5 ms-1">Username</label>
                                <input type="text" name="username" id="username" class="form-control border border-2" placeholder="Masukkan Username Anda" required autofocus>
                            </div>
                            <div class="mx-3 my-2">
                                <label for="password" class="form-label fs-5 ms-1">Password</label>
                                <input type="password" name="password" id="password" class="form-control border border-2" placeholder="Masukkan Password Anda" required autofocus>
                            </div>
                        </div>

                        <div class="container mt-5  ">
                            <div class="container d-flex justify-content-center">
                                <button type="submit" value="login" class="btn btn-warning text-uppercase">Login</button>
                            </div>
                            <div class="container-fluid">
                                <hr class="hr hr-blurry" />
                            </div>
                            <div class="container d-flex justify-content-center mt-3 fw-light fs-6">
                                <label for="" class="">Belum Punya Akun ?</label>
                            </div>
                            <div class="container d-flex justify-content-center mt-3">
                                <a href="register" class="btn btn-dark text-uppercase">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrapjs/bootstrap.bundle.min.js"></script>
</body>

</html>