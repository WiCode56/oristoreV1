                             <div class="container-fluid px-4 " style="margin-top:100px;">
                                 <div class="row">
                                     <div class="col-xl-3 col-md-6">
                                         <a href="index" class="text-decoration-none text-dark">
                                             <div class="card bg-white bg-gradient text-dark mb-4">
                                                 <div class="card-body">
                                                     <div class="container d-flex justify-content-evenly align-items-center text-center my-auto">
                                                         <i class="fa-solid fa-circle-arrow-left fs-1"></i>
                                                         <h1 class="text-uppercase fs-4 fw-bold text-center my-1">Kembali Ke Dashboard</h1>
                                                     </div>
                                                 </div>
                                                 <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link text-decoration-none" href="">Lihat Lebih Detail</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div> -->
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-md-6">
                                         <div class="card bg-primary text-white mb-4">
                                             <div class="card-body text-uppercase fs-5 fw-bold ">Data Admin</div>
                                             <div class="card-footer d-flex align-items-center justify-content-between">
                                                 <a class="small text-white stretched-link text-decoration-none" href="index?halaman=dataadmin">Lihat Lebih Detail</a>
                                                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xl-3 col-md-6">
                                         <div class="card bg-warning text-white mb-4">
                                             <div class="card-body text-uppercase fs-5 fw-bold">Data User</div>
                                             <div class="card-footer d-flex align-items-center justify-content-between">
                                                 <a class="small text-white stretched-link text-decoration-none" href="index?halaman=datauser">Lihat Lebih Detail</a>
                                                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xl-3 col-md-6">
                                         <div class="card bg-danger text-white mb-4">
                                             <div class="card-body text-uppercase fs-5 fw-bold">Data Penjualan</div>
                                             <div class="card-footer d-flex align-items-center justify-content-between">
                                                 <a class="small text-white stretched-link text-decoration-none" href="index?halaman=404">Lihat Lebih Detail</a>
                                                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="card shadow mb-4">
                                     <div class="card-header py-3">
                                         <h4 class="m-0 fw-bold text-dark text-uppercase">Data Produk</h4>
                                     </div>

                                     <div class="container-fluid">
                                         <div class="row">
                                             <div class="col-md-8">
                                                 <div class="container-fluid">
                                                     <button class="btn btn-warning text-uppercase mt-5" role="button" data-bs-toggle="modal" data-bs-target="#ModalProduk"><i class="fa-solid fa-plus me-2"></i>Tambah Data Produk</button>

                                                     <button class="btn btn-warning text-uppercase mt-5" role="button" data-bs-toggle="modal" data-bs-target="#ModalTampilkanKategori"><i class="fa-solid fa-eye me-2"></i>Tampilkan Kategori</button>
                                                 </div>
                                             </div>

                                             <div class="col-md-4">
                                                 <form class="input-group my-5" action="" method="post">
                                                     <input type="text" class="form-control" placeholder="Cari produk..." name="query" aria-label="Cari data" aria-describedby="button-addon2">
                                                     <button class="btn btn-outline-warning" type="cari" name="cari" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="card-body">
                                         <div class="table-responsive">
                                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                 <thead>
                                                     <tr class="text-center">
                                                         <th>No</th>
                                                         <th>Produk</th>
                                                         <th>Gambar</th>
                                                         <th>Merk</th>
                                                         <th>Kategori</th>
                                                         <th>Harga</th>
                                                         <th>Deskripsi</th>
                                                         <th>Stok</th>
                                                         <th>Aksi</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <?php
                                                        include "../../config/koneksi.php";
                                                        $no = 1;
                                                        $query = isset($_POST['query']) ? $_POST['query'] : '';
                                                        if ($query != '') {
                                                            $select = mysqli_query($koneksi, "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori WHERE namaproduct LIKE '%$query%' OR merk LIKE '%$query%' OR harga LIKE '%$query%' OR kategori LIKE '%$query%' OR deskripsi LIKE '%$query%' OR stok LIKE '%$query%' ");
                                                        } else {
                                                            $select = mysqli_query($koneksi, "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY id_produk DESC");
                                                        }
                                                        while ($data = mysqli_fetch_array($select)) :
                                                        ?>

                                                         <tr>
                                                             <td class="text-center"><?= $no++ ?></td>
                                                             <td><?= $data['namaproduct']; ?></td>
                                                             <td><img src="/oristore/produk/<?= $data['gambar']; ?>" width="100px" alt="Product Image"></td>
                                                             <td><?= $data['merk']; ?></td>
                                                             <td><?= $data['kategori']; ?></td>
                                                             <td>Rp<?= number_format($data['harga']) ?></td>
                                                             <td><?= $data['deskripsi']; ?></td>
                                                             <td><?= $data['stok']; ?></td>
                                                             <td class="d-flex">
                                                                 <!--edit-->
                                                                 <button class="btn btn-primary text-uppercase" type="button" data-bs-toggle="modal" data-bs-target="#ModalEditProduk<?= $data['id_produk'] ?>"><i class="fa-solid fa-pencil me-2" aria-hidden="true"></i>Edit</button>
                                                                 <!--deleted-->
                                                                 <a href="setting/deleteproduk?id_produk=<?= $data['id_produk']; ?>" class="btn btn-danger text-uppercase" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><i class="fa-solid fa-trash me-2" aria-hidden="true"></i>Hapus</a>
                                                             </td>
                                                         </tr>

                                                         <!-- Modal Edit Data Produk -->
                                                         <div class="modal fade" id="ModalEditProduk<?= $data['id_produk'] ?>" tabindex="-1" aria-labelledby="ModalEditProduk" aria-hidden="true">
                                                             <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                 <div class="modal-content">
                                                                     <div class="modal-header">
                                                                         <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Tambah Data Produk</h1>
                                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                     </div>
                                                                     <form action="setting/editdataproduk.php" method="POST" enctype="multipart/form-data">
                                                                         <div class="modal-body">
                                                                             <div class="my-3">
                                                                                 <div class="mb-1 d-flex">

                                                                                     <input type="hidden" name="id_produk" id="id_produk" value="<?= $data['id_produk']; ?>">

                                                                                     <div class="me-2 w-50">
                                                                                         <label for="nama" class="form-label fs-5 ms-1 ">Nama Produk</label>
                                                                                         <input type="text" name="namaproduct" id="namaproduct" value="<?= $data['namaproduct'] ?>" class="form-control border border-2" placeholder="Masukkan Nama Produk..." required autofocus>
                                                                                     </div>
                                                                                     <div class="ms-2 w-50">
                                                                                         <label for="email" class="form-label fs-5 ms-1 ">Stok</label>
                                                                                         <input type="text" name="stok" id="stok" value="<?= $data['stok'] ?>" class="form-control border border-2" placeholder="Masukkan Stok Anda..." required autofocus>
                                                                                     </div>
                                                                                 </div>

                                                                                 <div class="mb-1 d-flex">
                                                                                     <div class="me-2 w-50">
                                                                                         <label for="notelp" class="form-label fs-5 ms-1">Merk</label>
                                                                                         <input type="text" name="merk" id="merk" value="<?= $data['merk'] ?>" class="form-control border border-2" placeholder="Masukkan Merk Anda..." required>
                                                                                     </div>


                                                                                     <div class="ms-2 w-50">
                                                                                         <label for="gender" class="form-label fs-5 ms-1">Kategori</label>
                                                                                         <select class="form-select" name="id_kategori" data-placeholder="Pilih-Kategori" aria-placeholder="Pilih-Kategori" required>
                                                                                             <option value="<?= $data['id_kategori'] ?>" ><?= $data['kategori'] ?></option>
                                                                                             <?php
                                                                                                $select3 = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                                                                                while ($data3 = mysqli_fetch_array($select3)) :
                                                                                                ?>
                                                                                                 <option value="<?= $data3['id_kategori'] ?>"><?= $data3['kategori'] ?></option>
                                                                                             <?php endwhile; ?>
                                                                                         </select>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="mb-1">
                                                                                     <div class="me-2 w-100">
                                                                                         <label for="alamat" class="form-label fs-5 ms-1">Deskripsi</label>
                                                                                         <textarea type="text" name="deskripsi" id="deskripsi"  class="form-control border border-2" placeholder="Masukkan Deskripsi Produk..." required><?= $data['deskripsi'] ?></textarea>
                                                                                     </div>
                                                                                 </div>

                                                                                 <div class="mb-1 d-flex">
                                                                                     <div class="me-2 w-50">
                                                                                         <label for="username" class="form-label fs-5 ms-1">Harga</label>
                                                                                         <input type="text" name="harga" id="harga" value="<?= $data['harga'] ?>" class="form-control border border-2" placeholder="Masukkan Harga Produk..." required>
                                                                                     </div>
                                                                                     <div class="ms-2 w-50">
                                                                                         <label for="gambar" class="form-label fs-5 ms-1">Gambar</label>
                                                                                         <input class="form-control border border-2" type="file" name="gambar" >

                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="modal-footer">
                                                                                 <div class="container-fluid d-flex justify-content-between">
                                                                                     <button type="button" class="btn btn-secondary  text-uppercase fs-6" data-bs-dismiss="modal">Kembali</button>
                                                                                     <button type="submit" name="edit" class="btn btn-primary text-uppercase fs-6">Ubah</button>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </form>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                     <?php endwhile; ?>

                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Modal Tambah Data Produk -->
                             <div class="modal fade" id="ModalProduk" tabindex="-1" aria-labelledby="ModalProduk" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Tambah Data Produk</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <form action="setting/tambahdataproduk.php" method="POST" enctype="multipart/form-data">
                                             <div class="modal-body">
                                                 <div class="my-3">
                                                     <div class="mb-1 d-flex">
                                                         <div class="me-2 w-50">
                                                             <label for="nama" class="form-label fs-5 ms-1 ">Nama Produk</label>
                                                             <input type="text" name="namaproduct" id="namaproduct" class="form-control border border-2" placeholder="Masukkan Nama Produk..." required autofocus>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="email" class="form-label fs-5 ms-1 ">Stok</label>
                                                             <input type="text" name="stok" id="stok" class="form-control border border-2" placeholder="Masukkan Stok Anda..." required autofocus>
                                                         </div>
                                                     </div>

                                                     <div class="mb-1 d-flex">
                                                         <div class="me-2 w-50">
                                                             <label for="notelp" class="form-label fs-5 ms-1">Merk</label>
                                                             <input type="text" name="merk" id="merk" class="form-control border border-2" placeholder="Masukkan Merk Anda..." required>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="gender" class="form-label fs-5 ms-1">Kategori</label>
                                                             <select class="form-select" name="id_kategori" data-placeholder="Pilih-Kategori" aria-placeholder="Pilih-Kategori" required>
                                                                 <option>Pilih-Kategori</option>
                                                                 <?php
                                                                    $select2 = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                                                    while ($data2 = mysqli_fetch_array($select2)) :
                                                                    ?>
                                                                     <option value="<?= $data2['id_kategori'] ?>"><?= $data2['kategori'] ?></option>
                                                                 <?php endwhile; ?>
                                                             </select>
                                                         </div>
                                                     </div>
                                                     <div class="mb-1">
                                                         <div class="me-2 w-100">
                                                             <label for="alamat" class="form-label fs-5 ms-1">Deskripsi</label>
                                                             <textarea type="text" name="deskripsi" id="deskripsi" class="form-control border border-2" placeholder="Masukkan Deskripsi Produk..." required></textarea>
                                                         </div>
                                                     </div>

                                                     <div class="mb-1 d-flex">
                                                         <div class="me-2 w-50">
                                                             <label for="username" class="form-label fs-5 ms-1">Harga</label>
                                                             <input type="text" name="harga" id="harga" class="form-control border border-2" placeholder="Masukkan Harga Produk..." required>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="gambar" class="form-label fs-5 ms-1">Gambar</label>
                                                             <input class="form-control border border-2" type="file" name="gambar">

                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="modal-footer">
                                                     <div class="container-fluid d-flex justify-content-between">
                                                         <button type="button" class="btn btn-secondary  text-uppercase fs-6" data-bs-dismiss="modal">Kembali</button>
                                                         <button type="submit" name="submit" class="btn btn-primary text-uppercase fs-6">Tambah</button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>



                             <!-- Modal Tambah Kategori Produk -->
                             <div class="modal fade" id="ModalKategoriProduk" tabindex="-1" aria-labelledby="ModalKategoriProduk" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Tambah Kategori Produk</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <form action="setting/tambahkategori.php" method="POST">
                                             <div class="modal-body">
                                                 <div class="my-3">
                                                     <div class="mb-1 d-flex">

                                                         <div class="me-2 w-50">
                                                             <label for="nama" class="form-label fs-5 ms-1 ">ID Kategori</label>
                                                             <input type="text" name="id_kategori" id="id_kategori" class="form-control border border-2" placeholder="Masukkan Nama Produk..." required autofocus>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="email" class="form-label fs-5 ms-1 ">Kategori</label>
                                                             <input type="text" name="kategori" id="kategori" class="form-control border border-2" placeholder="Masukkan Stok Anda..." required autofocus>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <div class="container-fluid d-flex justify-content-between">
                                                     <button type="button" class="btn btn-secondary  text-uppercase fs-6" data-bs-toggle="modal" data-bs-target="#ModalTampilkanKategori">Kembali</button>
                                                     <button type="submit" name="submit" class="btn btn-primary text-uppercase fs-6">Tambah</button>
                                                 </div>
                                             </div>
                                     </div>
                                     </form>
                                 </div>
                             </div>


                             <!-- Modal Tampilkan Kategori -->
                             <div class="modal fade" id="ModalTampilkanKategori" tabindex="-1" aria-labelledby="ModalTampilkanKategori" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Kategori</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">

                                             <div class="my-3">
                                                 <div class="card-body">
                                                     <div class="table-responsive">
                                                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                             <thead>
                                                                 <tr class="text-center">
                                                                     <th>No</th>
                                                                     <th>ID Kategori</th>
                                                                     <th>Kategori</th>
                                                                     <th>Aksi</th>

                                                                 </tr>
                                                             </thead>
                                                             <tbody>
                                                                 <?php
                                                                    include "../../config/koneksi.php";
                                                                    $no = 1;
                                                                    $query1 = $_POST['$query1'];
                                                                    if ($query1 != '') {
                                                                        $select1 = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                                    } else {
                                                                        $select1 = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC");
                                                                    }
                                                                    while ($data1 = mysqli_fetch_array($select1)) :

                                                                    ?>
                                                                     <tr>
                                                                         <td class="text-center"><?= $no++ ?></td>
                                                                         <td><?= $data1['id_kategori']; ?></td>
                                                                         <td><?= $data1['kategori']; ?></td>
                                                                         <td class="d-flex">

                                                                             <!--deleted-->
                                                                             <a href="setting/deletekategori?id_kategori=<?= $data1['id_kategori']; ?>" class="btn btn-danger text-uppercase" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><i class="fa-solid fa-trash me-2" aria-hidden="true"></i>Hapus</a>
                                                                         </td>
                                                                     <?php endwhile; ?>
                                                                     </tr>
                                                             </tbody>
                                                         </table>
                                                     </div>
                                                 </div>


                                             </div>
                                         </div>
                                         <div class="modal-footer">
                                             <div class="container-fluid d-flex justify-content-between">
                                                 <button type="button" class="btn btn-secondary  text-uppercase fs-6" data-bs-dismiss="modal">Kembali</button>
                                                 <button type="submit" name="submit" data-bs-toggle="modal" data-bs-target="#ModalKategoriProduk" class="btn btn-primary text-uppercase fs-6">Tambah</button>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>

                            