<?php

include "../../../config/koneksi.php";

        $ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
        $data = $ambil->fetch_assoc();

        $koneksi->query("DELETE FROM kategori WHERE id_kategori='$_GET[id_kategori]'");

        if($ambil) {
                echo "<script>alert('Berhasil Delete!'); window.location.href='../index?halaman=dataproduk';</script>";
}