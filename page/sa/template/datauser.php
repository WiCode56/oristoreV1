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

                                 <div class="card shadow mb-4">
                                     <div class="card-header py-3">
                                         <h4 class="m-0 fw-bold text-dark text-uppercase">Data User</h4>
                                     </div>

                                     <div class="row">
                                         <div class="col-lg-8">
                                             <button class="btn btn-warning text-uppercase " style="margin:30px;" role="button" data-bs-toggle="modal" data-bs-target="#ModalUser"><i class="fa-solid fa-plus me-2"></i>Tambah Data User</button>
                                         </div>

                                         <div class="col-lg-3">
                                             <form class="input-group mb-3" action="" method="post" style="margin-top:30px;">
                                                 <input type="text" class="form-control" placeholder="Cari data" name="query" aria-label="Cari data" aria-describedby="button-addon2">
                                                 <button class="btn btn-outline-warning " type="cari" name="cari" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                             </form>
                                         </div>
                                     </div>

                                     <div class="card-body">
                                         <div class="table-responsive">
                                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                 <thead>
                                                     <tr class="text-center">
                                                         <th>No</th>
                                                         <th>Nama</th>
                                                         <th>Email</th>
                                                         <th>Alamat</th>
                                                         <th>No Telp</th>
                                                         <th>Gender</th>
                                                         <th>Username</th>
                                                         <th>Password</th>
                                                         <th>Aksi</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <?php
                                                        include "../../config/koneksi.php";
                                                        $no = 1;
                                                        $query = $_POST['$query'];
                                                        if ($query != '') {
                                                            $select = mysqli_query($koneksi, "SELECT * FROM user WHERE nama LIKE '%$query%' OR email LIKE '%$query%' OR alamat LIKE '%$query%' OR notelp LIKE '%$query%' OR gender LIKE '%$gender%' OR username LIKE '%$username%' OR password LIKE '%$password%' ");
                                                        } else {
                                                            $select = mysqli_query($koneksi, "SELECT * FROM user WHERE role = 'user' ORDER BY id_user ASC");
                                                        }
                                                        while ($data = mysqli_fetch_array($select)) :

                                                        ?>
                                                         <tr>
                                                             <td class="text-center"><?= $no++ ?></td>
                                                             <td><?= $data['nama']; ?></td>
                                                             <td><?= $data['email']; ?></td>
                                                             <td><?= $data['alamat']; ?></td>
                                                             <td><?= $data['notelp']; ?></td>
                                                             <td><?= $data['gender']; ?></td>
                                                             <td><?= $data['username']; ?></td>
                                                             <td><?= $data['password']; ?></td>
                                                             <td class="d-flex">
                                                                 <!--edit-->
                                                                 <button class="btn btn-primary text-uppercase" type="button" data-bs-toggle="modal" data-bs-target="#ModalEditUser<?= $data['id_user']; ?>"><i class="fa-solid fa-pencil me-2" aria-hidden="true"></i>Edit</button>
                                                                 <!--deleted-->
                                                                 <a href="setting/deleteuser?id_user=<?= $data['id_user']; ?>" class="btn btn-danger text-uppercase" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><i class="fa-solid fa-trash me-2" aria-hidden="true"></i>Hapus</a>
                                                                </td>


                                                             <!-- Modal Edit Data User -->
                                                             <div class="modal fade" id="ModalEditUser<?= $data['id_user'] ?>" tabindex="-1" aria-hidden="true">
                                                                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                     <div class="modal-content">
                                                                         <div class="modal-header">
                                                                             <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Edit Data User</h1>
                                                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                         </div>
                                                                         <form action="setting/editdatauser.php" method="POST">

                                                                             <div class="modal-body">
                                                                                 <div class="my-3">
                                                                                     <div class="mb-1 d-flex">

                                                                                         <input type="hidden" name="id_user" id="id_user" value="<?= $data['id_user']; ?>">
                                                                                         <input type="hidden" name="role" id="role" value="user">

                                                                                         <div class="me-2 w-50">
                                                                                             <label for="nama" class="form-label fs-5 ms-1 ">Nama</label>
                                                                                             <input type="text" name="nama" id="nama" class="form-control border border-2" value="<?= $data['nama']; ?>" placeholder="Masukkan Nama Anda" required autofocus>
                                                                                         </div>
                                                                                         <div class="ms-2 w-50">
                                                                                             <label for="email" class="form-label fs-5 ms-1 ">Email</label>
                                                                                             <input type="text" name="email" id="email" class="form-control border border-2" value="<?= $data['email']; ?>" placeholder="Masukkan Email Anda" required autofocus>
                                                                                         </div>
                                                                                     </div>

                                                                                     <div class="mb-1 d-flex">
                                                                                         <div class="me-2 w-50">
                                                                                             <label for="notelp" class="form-label fs-5 ms-1">No Telp</label>
                                                                                             <input type="text" name="notelp" id="notelp" class="form-control border border-2" value="<?= $data['notelp'] ?>" placeholder="Masukkan No Telp Anda" required>
                                                                                         </div>
                                                                                         <div class="ms-2 w-50">
                                                                                             <label for="gender" class="form-label fs-5 ms-1">Gender</label>
                                                                                             <select class="form-select" name="gender" data-placeholder="Pilih-Gender" aria-placeholder="Pilih-Gender" required>
                                                                                                 <option> <?= $data['gender']; ?> </option>
                                                                                                 <option value="Laki-laki">Laki-laki</option>
                                                                                                 <option value="Perempuan">Perempuan</option>
                                                                                                 <option value="Other">Other</option>
                                                                                             </select>
                                                                                         </div>
                                                                                     </div>

                                                                                     <div class="mb-1">
                                                                                         <div class="me-2 w-100">
                                                                                             <label for="alamat" class="form-label fs-5 ms-1">Alamat</label>
                                                                                             <input type="text" name="alamat" id="alamat" class="form-control border border-2" value="<?= $data['alamat']; ?>" placeholder="Masukkan Alamat Anda" required>
                                                                                         </div>
                                                                                     </div>

                                                                                     <div class="mb-1 d-flex">
                                                                                         <div class="me-2 w-525">
                                                                                             <label for="username" class="form-label fs-5 ms-1">Username</label>
                                                                                             <input type="text" name="username" id="username" class="form-control border border-2" value="<?= $data['username']; ?>" placeholder="Masukkan Username Anda" required>
                                                                                         </div>
                                                                                         <div class="ms-2 w-75">
                                                                                             <label for="password" class="form-label fs-5 ms-1">Password</label>
                                                                                             <input type="password" name="password" id="password" class="form-control border border-2" placeholder="Masukkan Password Anda">
                                                                                             <label for="password" class="text-danger text-uppercase ms-1">*Jika tidak merubah password mohon dikosongkan!</label>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="modal-footer">
                                                                                     <div class="container-fluid d-flex justify-content-between">
                                                                                         <button type="button" class="btn btn-secondary  text-uppercase fs-6" data-bs-dismiss="modal">Kembali</button>
                                                                                         <button type="submit" name="edit" class="btn btn-primary text-uppercase fs-6">Update</button>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </form>
                                                                     </div>
                                                                 </div>

                                                             <?php endwhile; ?>
                                                         </tr>
                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Modal Tambah Data User -->
                             <div class="modal fade" id="ModalUser" tabindex="-1" aria-labelledby="ModalUser" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h1 class="modal-title fs-5 fw-bold text-uppercase" id="exampleModalLabel">Tambah Data User</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <form action="setting/tambahdatauser.php" method="POST">
                                             <div class="modal-body">
                                                 <div class="my-3">
                                                     <div class="mb-1 d-flex">
                                                         <input type="hidden" name="role" id="role" value="user">

                                                         <div class="me-2 w-50">
                                                             <label for="nama" class="form-label fs-5 ms-1 ">Nama</label>
                                                             <input type="text" name="nama" id="nama" class="form-control border border-2" placeholder="Masukkan Nama Anda" required autofocus>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="email" class="form-label fs-5 ms-1 ">Email</label>
                                                             <input type="text" name="email" id="email" class="form-control border border-2" placeholder="Masukkan Email Anda" required autofocus>
                                                         </div>
                                                     </div>

                                                     <div class="mb-1 d-flex">
                                                         <div class="me-2 w-50">
                                                             <label for="notelp" class="form-label fs-5 ms-1">No Telp</label>
                                                             <input type="text" name="notelp" id="notelp" class="form-control border border-2" placeholder="Masukkan No Telp Anda" required>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="gender" class="form-label fs-5 ms-1">Gender</label>
                                                             <select class="form-select" name="gender" data-placeholder="Pilih-Gender" aria-placeholder="Pilih-Gender" required>
                                                                 <option>Pilih-Gender</option>
                                                                 <option value="Laki-laki">Laki-laki</option>
                                                                 <option value="Perempuan">Perempuan</option>
                                                                 <option value="Other">Other</option>
                                                             </select>
                                                         </div>
                                                     </div>

                                                     <div class="mb-1">
                                                         <div class="me-2 w-100">
                                                             <label for="alamat" class="form-label fs-5 ms-1">Alamat</label>
                                                             <input type="text" name="alamat" id="alamat" class="form-control border border-2" placeholder="Masukkan Alamat Anda" required>
                                                         </div>
                                                     </div>

                                                     <div class="mb-1 d-flex">
                                                         <div class="me-2 w-50">
                                                             <label for="username" class="form-label fs-5 ms-1">Username</label>
                                                             <input type="text" name="username" id="username" class="form-control border border-2" placeholder="Masukkan Username Anda" required>
                                                         </div>
                                                         <div class="ms-2 w-50">
                                                             <label for="password" class="form-label fs-5 ms-1">Password</label>
                                                             <input type="password" name="password" id="password" class="form-control border border-2" placeholder="Masukkan Password Anda" required>
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