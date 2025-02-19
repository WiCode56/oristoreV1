<?php

include "../../../config/koneksi.php";

        $ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
        $data = $ambil->fetch_assoc();

        $koneksi->query("DELETE FROM user WHERE id_user='$_GET[id_user]'");

        if($ambil) {
                echo "<script>alert('Berhasil Delete!'); window.location.href='../index?halaman=dataadmin';</script>";
}