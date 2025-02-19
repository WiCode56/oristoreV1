<?php
include "../../../config/koneksi.php";

if (isset($_POST['submit'])) {
  $idkategori = filter_input(INPUT_POST, 'id_kategori', FILTER_SANITIZE_STRING);
  $kategori = filter_input(INPUT_POST, 'kategori', FILTER_SANITIZE_STRING);

  $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$idkategori'") or die(mysqli_error($koneksi));

  if (mysqli_num_rows($cek) == 0) {
    $sql = mysqli_query($koneksi, "INSERT INTO kategori (id_kategori,kategori)
    VALUES ('$idkategori', '$kategori') ") or die(mysqli_error($koneksi));

    if ($sql) {
      echo '<script>alert("Berhasil menambahkan data."); document.location="../index?halaman=dataproduk";</script>';
    } else {
      echo '<script>alert("Gagal menambahkan data."); document.location="../index?halaman=dataproduk";</script>';
    }
  } else {
    echo '<script>alert("Data Sudah Ada."); document.location="../index?halaman=dataproduk";</script>';
  }
}
