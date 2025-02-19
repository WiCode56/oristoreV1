<?php
if (isset($_POST['edit'])) {
    include "../../../config/koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk ='$_POST[id_produk]'");
    $data =  mysqli_fetch_array($sql);

    // Periksa apakah ada input gambar yang dikirimkan melalui form
    if (isset($_FILES['gambar'])) {
        $namafoto = $_FILES['gambar']['name'];
        $lokasifoto = $_FILES['gambar']['tmp_name'];
        $direktori_tujuan = "C:/xampp/htdocs/oristore/produk/";

        // Jika foto diubah
        if (!empty($lokasifoto)) {
            // Check if the uploaded file is an image
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($namafoto, PATHINFO_EXTENSION));

            if (in_array($file_extension, $allowed_extensions)) {
                // Pindahkan file ke direktori tujuan baru
                if (move_uploaded_file($lokasifoto, $direktori_tujuan . $namafoto)) {
                    echo "File berhasil diunggah.";
                } else {
                    echo "Gagal mengunggah file.";
                }
            } else {
                echo "File harus berupa gambar (jpg, jpeg, png, atau gif).";
            }
        } else {
            // Jika tidak ada input gambar baru, gunakan gambar yang sudah ada sebelumnya
            $namafoto = $data['gambar'];
        }
    } else {
        // Jika tidak ada input gambar, gunakan gambar yang sudah ada sebelumnya
        $namafoto = $data['gambar'];
    }

    // Lakukan query UPDATE
    $query = $koneksi->query("UPDATE produk SET namaproduct='$_POST[namaproduct]', merk='$_POST[merk]', harga='$_POST[harga]', gambar='$namafoto', id_kategori='$_POST[id_kategori]', deskripsi='$_POST[deskripsi]', stok='$_POST[stok]' WHERE id_produk='$_POST[id_produk]'");

    // Periksa apakah query berhasil dijalankan
    if ($query) {
        echo "<script>alert('Berhasil Mengubah Data!'); window.location.href='../index?halaman=dataproduk';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data.'); window.location.href='../index?halaman=dataproduk';</script>";
    }
}

