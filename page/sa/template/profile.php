<?php
// include "../../config/koneksi.php";

// $sql = "SELECT * FROM user WHERE BINARY username='".$_POST['username']."' AND BINARY password= md5('".$_POST['password']."')";
// $query = mysqli_query($koneksi, $sql);
// $cek = mysqli_num_rows($query);

// if($cek>0){
//     $data = mysqli_fetch_assoc($query);
// $_SESSION['nama'] = $data['nama']; // set session untuk nama
// $_SESSION['email'] = $data['email']; // set session untuk nim
// $_SESSION['alamat'] = $data['alamat']; // set session untuk fakultas
// }else{
// die('username atau password tidak ditemukan');
// }

?>


<div class="container-fluid" style="margin-top:150px;">
    
        <a href="index?halaman=dashboard" class="btn btn-primary mb-4" ><i class="fa fa-long-arrow-left me-2" aria-hidden="true"></i>Kembali ke Dashboard</a>
    
    <div class="container-fluid mb-4">
        <h1 class="text-uppercase fw-bold fs-3" >Profile</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body shadow">
                <i class="fa fa-user fs-1 mt-4"></i>
                <h4 class="text-center mt-2 text-uppercase fw-bold">I Made Wira Atmaja</h4>
                <h6 class="card-subtitle text-muted text-center ">user</h6>
                <hr class="mt-4">

                <div class="container-fluid">
                    <h6 class="card-subtitle mt-2 fw-bold text-uppercase">Email</h6>
                    <h4 class=" fs-6">IMadeWiraAtmaja@gmail.com</h4>
                </div>

            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-body shadow">
                <div class="container-fluid my-3">
                    <h1 class="text-uppercase fw-bold fs-3 text-center" >Biodata</h1>
                </div>

                    <div class="container-fluid">
                        <div class="container-fluid my-3">
                            <h4 class="card-subtitle mt-2 fw-bold text-uppercase">Nama</h4>
                            <h4 class=" fs-4">IMadeWiraAtmaja@gmail.com</h4>
                        </div>
                        <div class="container-fluid my-3">
                            <h4 class="card-subtitle mt-2 fw-bold text-uppercase">Email</h4>
                            <h4 class=" fs-4">IMadeWiraAtmaja@gmail.com</h4>
                        </div>
                        <div class="container-fluid my-3">
                            <h4 class="card-subtitle mt-2 fw-bold text-uppercase">Alamat</h4>
                            <h4 class=" fs-4">IMadeWiraAtmaja@gmail.com</h4>
                        </div>
                        <div class="container-fluid my-3">
                            <h4 class="card-subtitle mt-2 fw-bold text-uppercase">No Telp</h4>
                            <h4 class=" fs-4">IMadeWiraAtmaja@gmail.com</h4>
                        </div>
                        
                    </div>
                <div class="container-fluid">

                </div>
            </div>
        </div>
    </div>

        
</div>