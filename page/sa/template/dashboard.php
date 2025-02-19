<main>
<div class="container-fluid px-4 " style="margin-top:75px;">
                        <h1 class="mt-4 mb-2 fw-bold">Dashboard</h1>
                        <h2 class="mt-2 mb-5 text-success">Selamat Datang <b><?php echo $_SESSION['username']; ?></b> Di Halaman SA Admin</h2>
                        <div class="row">
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
                                <div class="card bg-secondary bg-gradient text-white mb-4">
                                    <div class="card-body text-uppercase fs-5 fw-bold">Data Produk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="index?halaman=dataproduk">Lihat Lebih Detail</a>
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
                            

                        <div class="row mt-5 mb-5">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa fa-warehouse me-1"></i>
                                        <span>Data Produk Terbaru</span>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Merk</th>
                                                <th>Kategori</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                    include "../../config/koneksi.php";
                                                    $no = 1;
                                                    
                                                    $select = mysqli_query($koneksi,"SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY id_produk DESC");
                                                    
                                                    while($data=mysqli_fetch_array($select)):
                                                    
                                                    ?>
                                                    <tr>
                                                        <td class="text-center" ><?= $no++ ?></td>
                                                        <td><?= $data['namaproduct']; ?></td>
                                                        <td><?= $data['merk']; ?></td>
                                                        <td><?= $data['kategori']; ?></td>
                                                        <td><?= $data['stok']; ?></td>
                                                        <td><?= $data['harga']; ?></td>
                                                        
                                                       

                                                    <?php endwhile; ?> 
                                                    </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-solid fa-user-tie me-1"></i>
                                        <span>Data Admin Terbaru</span>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>No Telp</th>
                                                    <th>Gender</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    include "../../config/koneksi.php";
                                                    $no = 1;
                                                    
                                                    $select = mysqli_query($koneksi,"SELECT * FROM user WHERE role = 'admin' ORDER BY id_user DESC");
                                                    
                                                    while($data=mysqli_fetch_array($select)):
                                                    
                                                    ?>
                                                    <tr>
                                                        <td class="text-center" ><?= $no++ ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['email']; ?></td>
                                                        <td><?= $data['alamat']; ?></td>
                                                        <td><?= $data['notelp']; ?></td>
                                                        <td><?= $data['gender']; ?></td>
                                                       
                                                    <?php endwhile; ?> 
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-solid fa-user me-1"></i>
                                      <span>Data User Terbaru</span>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>No Telp</th>
                                                    <th>Gender</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    include "../../config/koneksi.php";
                                                    $no = 1;
                                                    $select = mysqli_query($koneksi,"SELECT * FROM user WHERE role = 'user' ORDER BY id_user DESC");
                                                    while($data=mysqli_fetch_array($select)):
                                                    
                                                    ?>
                                                    <tr>
                                                        <td class="text-center" ><?= $no++ ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['email']; ?></td>
                                                        <td><?= $data['alamat']; ?></td>
                                                        <td><?= $data['notelp']; ?></td>
                                                        <td><?= $data['gender']; ?></td>
                                            
                                                    <?php endwhile; ?> 
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-xl-3 col-md-6">
                            <h3 class="mt-4 mb-5 fw-semibold">Data Produk Terbaru</h3>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <h3 class="mt-4 mb-5 fw-semibold">Data Admin Terbaru</h3>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h3 class="mt-4 mb-5 fw-semibold">Data User Terbaru</h3>
                        </div> -->

</main>