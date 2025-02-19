<?php

include "../../../config/koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user ='$_POST[id_user]'");
$data =  mysqli_fetch_array($sql);

if (isset($_POST['password'])) {
    $password = md5($_POST['password']);
} else {
    $password = $data['password'];
}



if (isset($_POST['edit'])) {
    $query = mysqli_query($koneksi, "UPDATE user SET 
    id_user = '$_POST[id_user]',
    nama = '$_POST[nama]',
    email = '$_POST[email]',
    alamat = '$_POST[alamat]',
    notelp = '$_POST[notelp]',
    gender = '$_POST[gender]',
    username = '$_POST[username]',
    password = '$password'
    WHERE id_user = '$_POST[id_user]'");

    if ($query) {
        echo "<script>alert('Berhasil Mengubah Data!'); window.location.href='../index?halaman=datauser';</script>";
    }
}
