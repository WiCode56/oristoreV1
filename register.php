<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Oristore</title>
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
<body >
    <?php
            if(isset($_GET['pesan']) && $_GET['pesan'] == 'berhasil') {
                    ?>
                    <div class="alert alert-success text-center text-uppercase" role="alert">
                    Anda Berhasil Registrasi!
                  </div>
                    <?php
                }
                ?>
<div class="container vh-100 ">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <form action="config/cekregister.php" method="post">
                    <div class="border border-2 shadow-lg p-4 rounded">
                        <a href="index"><i class="fa fa-long-arrow-left" aria-hidden="true"> Back Home</i></a>
                        <div class="container mb-5 d-inline">
                        <div class="my-2">
                                <h1 class="fw-bold text-center text-uppercase text-warning outline-dark" >OriStore</h1>
                            </div>
                            <div class="mb-2">
                                <h1 class="text-uppercase fw-bold text-center fs-2">Register Account</h1>
                            </div>
                        </div>

                        <div class="mb-1 d-flex">
                            <input type="hidden" name="role" id="role" value="user">
                            
                            <div class="me-2 w-50">
                                <label for="nama" class="form-label fs-5 ms-1 ">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control border border-2" placeholder="Masukkan Nama Anda" required autofocus>
                            </div>
                            <div class="ms-2 w-50">
                                <label for="email" class="form-label fs-5 ms-1 ">Email</label>
                                <input type="text" name="email" id="email" class="form-control border border-2" placeholder="Masukkan Email Anda" required autofocus>
                            </div>
                        </div>

                        <div class="mb-1 d-flex">
                            <div class="me-2 w-50">
                                <label for="notelp" class="form-label fs-5 ms-1">No Telp</label>
                                <input type="text" name="notelp" id="notelp" class="form-control border border-2" placeholder="Masukkan No Telp Anda" required>
                            </div>
                            <div class="ms-2 w-50">
                                <label for="gender" class="form-label fs-5 ms-1">Gender</label>
                                <select class="form-select" name="gender" data-placeholder="Pilih-Gender" aria-placeholder="Pilih-Gender" required>
                                    <option>Pilih-Gender</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div class="me-2 w-100">
                                <label for="alamat" class="form-label fs-5 ms-1">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control border border-2" placeholder="Masukkan Alamat Anda" required>
                            </div>
                        </div>

                        <div class="mb-1 d-flex">
                            <div class="me-2 w-50">
                                <label for="username" class="form-label fs-5 ms-1">Username</label>
                                <input type="text" name="username" id="username" class="form-control border border-2" placeholder="Masukkan Username Anda" required>
                            </div>
                            <div class="ms-2 w-50">
                                <label for="password" class="form-label fs-5 ms-1">Password</label>
                                <input type="password" name="password" id="password" class="form-control border border-2" placeholder="Masukkan Password Anda" required>
                            </div>
                        </div>

                        <div class="container mt-5  ">
                            <div class="container d-flex justify-content-center">
                                <button type="submit" name="proses" class="btn btn-warning text-uppercase">Register</button>
                            </div>
                            <div class="container-fluid">
                                <hr class="hr hr-blurry"/>
                            </div>
                            <div class="container d-flex justify-content-center mt-3 fw-light fs-6">
                                <label for="" class="">Sudah Punya Akun ?</label>
                            </div>
                            <div class="container d-flex justify-content-center mt-3">
                                <a href="login" class="btn btn-dark text-uppercase">Login</a>
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