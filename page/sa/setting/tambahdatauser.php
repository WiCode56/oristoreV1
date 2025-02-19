<?php 
include "../../../config/koneksi.php";

if(isset($_POST['submit'])){
    $nama = filter_input(INPUT_POST,'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $alamat = filter_input(INPUT_POST,'alamat', FILTER_SANITIZE_STRING);
    $notelp = filter_input(INPUT_POST,'notelp', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST,'gender', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
    $password = strip_tags(md5($_POST["password"]));
    $role = filter_input(INPUT_POST,'role', FILTER_SANITIZE_STRING);

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
   $sql = mysqli_query($koneksi,"INSERT INTO user (nama,email,alamat,notelp,gender,username,password,role)
    VALUES ('$nama', '$email', '$alamat', '$notelp', '$gender', '$username', '$password', '$role') ") or die(mysqli_error($koneksi));

if($sql){
    echo '<script>alert("Berhasil menambahkan data."); document.location="../index?halaman=datauser";</script>';
  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
  }
  }else{
    echo '<div class="alert alert-warning">Gagal, User sudah terdaftar.</div>';
  }
}
