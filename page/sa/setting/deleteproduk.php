<?php

include "../../../config/koneksi.php";

        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
        $data = $ambil->fetch_assoc();

        $koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id_produk]'");

        if($ambil) {
                echo "<script>alert('Berhasil Delete!'); window.location.href='../index?halaman=dataproduk';</script>";
}