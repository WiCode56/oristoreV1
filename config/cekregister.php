<?php 
include "koneksi.php";

if(isset($_POST['proses'])){

    $nama = filter_input(INPUT_POST,'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $alamat = filter_input(INPUT_POST,'alamat', FILTER_SANITIZE_STRING);
    $notelp = filter_input(INPUT_POST,'notelp', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST,'gender', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
    $password = strip_tags(md5($_POST["password"]));
    $role = filter_input(INPUT_POST,'role', FILTER_SANITIZE_STRING);

    mysqli_query($koneksi,"INSERT INTO user (nama,email,alamat,notelp,gender,username,password,role)
    VALUES (    '$nama',
                '$email',
                '$alamat',
                '$notelp',
                '$gender',
                '$username',
                '$password',
                '$role'
            )
    
    ");

    header('location:../register?pesan=berhasil');

}else{}
