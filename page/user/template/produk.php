<div class="container-fluid">
    <div class="card shadow mb-4" style="margin-top:150px;">
        <div class="card-header py-3">
            <h4 class="m-0 fw-bold text-dark text-uppercase text-center">Produk</h4>
        </div>

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container-fluid my-3">
                                <form method="post">
                                    <select class="form-select" id="kategori" name="kategori" data-placeholder="Pilih-Kategori">
                                        <option>Pilih-Kategori</option>
                                        <?php
                                        include "../../config/koneksi.php";
                                        $select2 = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                        while ($data2 = mysqli_fetch_array($select2)) :
                                        ?>
                                            <option value="<?= $data2['id_kategori'] ?>"><?= $data2['kategori'] ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3">
                            <div class="container-fluid my-3">
                                <form action="POST">
                                    <select class="form-select" data-placeholder="Pilih-Brand">
                                        <option>Pilih-Brand</option>
                                        <option value="">Pilih-Brand</option>
                                        <option value="">Pilih-Brand</option>
                                        <option value="">Pilih-Brand</option>
                                    </select>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="container-fluid">
                        <form class="input-group my-3" action="" method="post">
                            <input type="text" class="form-control" placeholder="Cari data..." name="query" aria-label="Cari data" aria-describedby="button-addon2">
                            <button class="btn btn-outline-warning" type="button" name="query" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                    <?php
                    include "../../config/koneksi.php";

                    $batas = 6;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $query = $_POST['query'];
                    if ($query != '') {
                        $select = mysqli_query($koneksi, "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori WHERE namaproduct LIKE '%$query%' OR merk LIKE '%$query%' OR harga LIKE '%$query%' OR kategori LIKE '%$query%' OR stok LIKE '%$query%' OR gambar LIKE '%$query$' ");
                    } else {
                        $select = mysqli_query($koneksi, "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY id_produk ASC");
                        $jumlah_data = mysqli_num_rows($select);
                        $total_halaman = ceil($jumlah_data / $batas);
                    }

                    $query2 = $_POST['kategori'];
                    if($query2 != ''){
                        $select2 = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori LIKE '%$query2%' ");
                    }

                    $data_produk = mysqli_query($koneksi, "SELECT * FROM produk limit $halaman_awal, $batas");
                    $nomor = $halaman_awal + 1;
                    while ($data = mysqli_fetch_array($select)) :

                    ?>
                        <!-- produk/
                     -->
                        <div class="col-lg-3">
                            <div class="card card-body my-3">
                                <img src="/oristore/produk/<?= $data['gambar']; ?>" alt="" class="">
                                <div class="card-body mt-3">
                                    <h5 class="card-title text-center"><?= $data['namaproduct']; ?></h5>
                                    <h6 class="text-subtitle text-center text-uppercase"><?= $data['kategori']; ?></h6>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center text-uppercase"> STOK : <?= $data['stok']; ?></h6>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-muted text-center">Rp. <?= number_format($data['harga']); ?></h5>
                                </div>
                                <div class="container-fluid">
                                    <div class="container-fluid my-2 d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary w-50 text-uppercase fs-6" data-bs-toggle="modal" data-bs-target="#ModalDetailProduk<?= $data['id_produk'] ?>">Detail</button>
                                    </div>
                                    <div class="container-fluid my-2 d-flex justify-content-center">
                                        <a href="index?halaman=404produk" class="btn btn-warning w-50 text-uppercase fs-6">Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detail Product-->
                        <div class="modal fade" id="ModalDetailProduk<?= $data['id_produk'] ?>" tabindex="-1" aria-labelledby="ModalDetailProduct" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="my-3">
                                            <div class="d-flex justify-content-center">
                                                <img src="/oristore/produk/<?= $data['gambar']; ?>" alt="" class="img-thumbnail bg-secondary">
                                            </div>
                                            <div class="card-body mt-3">
                                                <h5 class="card-title text-center"><?= $data['namaproduct'] ?></h5>
                                                <h6 class="text-subtitle text-center text-uppercase"><?= $data['kategori'] ?></h6>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="text-muted text-center">Spesifikasi : <br> <?= $data['deskripsi'] ?></h6>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="text-muted text-center">Stok : <?= $data['stok'] ?></h6>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-muted text-center">Rp. <?= number_format($data['harga']) ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="container-fluid d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary  text-uppercase fs-6" data-bs-dismiss="modal">Kembali</button>
                                            <a href="index?halaman=404produk" type="button" class="btn btn-warning  text-uppercase fs-6">Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>


                    <!-- <div class="container-fluid pagination d-flex justify-content-center my-5">
                        <nav aria-label="..." class="">
                            <ul class="pagination">
                                <li class="page-item me-1">
                                    <a class="page-link fw-bold bg-warning text-dark text-uppercase" <?php if ($halaman > 1) {
                                                                                                            echo "href='?halaman=$previous'";
                                                                                                        } ?>><i class="fa-solid fa-arrow-left me-2"></i>Previous</a>
                                </li>
                                <?php
                                for ($x = 1; $x <= $total_halaman; $x++) {
                                ?>
                                    <li class="page-item ">
                                        <a class="page-link border border-dark border-1 text-dark" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                    </li>

                                <?php } ?>


                                <li class="page-item ms-1">
                                    <a class="page-link fw-bold bg-warning text-dark text-uppercase" <?php if ($halaman < $total_halaman) {
                                                                                                            echo "href='?halaman=$next'";
                                                                                                        } ?>>Next<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->

                </div>
            </div>
        </div>



    </div>
</div>