<?php

if(isset($_POST['submit'])){
  
  include "../../../config/koneksi.php";
  
  // Tentukan direktori tujuan yang diinginkan
  $direktori_tujuan = "C:/xampp/htdocs/oristore/produk/";
  
  $nama = $_FILES['gambar']['name'];
  $lokasi = $_FILES['gambar']['tmp_name'];

  // Memeriksa jenis file menggunakan getimagesize
  $gambar_info = getimagesize($lokasi);

  if($gambar_info !== false) {
    // Jenis file yang diperbolehkan
    $jenis_file_diperbolehkan = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);

    if (in_array($gambar_info[2], $jenis_file_diperbolehkan)) {
      // Pindahkan file ke direktori tujuan baru
      if (move_uploaded_file($lokasi, $direktori_tujuan . $nama)) {
        echo "File berhasil diunggah.";  
      } else {
        echo "Gagal mengunggah file.";
      }

      $query = mysqli_query($koneksi, "INSERT INTO produk (namaproduct, merk, harga, id_kategori, deskripsi, stok, gambar)
        VALUES ('$_POST[namaproduct]', '$_POST[merk]', '$_POST[harga]', '$_POST[id_kategori]', '$_POST[deskripsi]', '$_POST[stok]', '$nama') ");

      if($query){
        echo '<script>alert("Berhasil menambahkan data."); document.location="../index?halaman=dataproduk";</script>';
      } else {
        echo '<script>alert("Gagal menambahkan data.");</script>';
      }
    } else {
      echo '<script>alert("Jenis file tidak diperbolehkan. Hanya gambar JPEG, PNG, dan GIF yang diizinkan.");</script>';
    }
  } else {
    echo '<script>alert("File Bukan Gambar."); document.location="../index?halaman=dataproduk";</script>';
  }
}

