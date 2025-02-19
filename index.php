<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORISTORE</title>
    <link rel="stylesheet" href="assets/css/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- AOS MASTER -->
    <link rel="stylesheet" href="assets/css/aos-master/aos-master/dist/aos.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />



</head>

<body id="beranda">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <div class="jdlbrand">
                <a class="text-decoration-none" href="#home">
                    <h2 class="">OriStore</h2>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#product">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li><a href="login" class="btn btn-primary"><i class="fa fa-sign-in fa-lg pe-2" aria-hidden="true"></i>LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" id="home">
            <div class="carousel-item active">
                <img src="assets/img/banner/162.png" class="d-block w-100" alt="Make Your Day">
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner/banneroffice.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <section class="page-section bg-body-secondary" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-warning" data-aos="fade-down" data-aos-duration="1500" style="margin-bottom:50px !important ;">ABOUT US</h2>
                <div class="row">

                    <div class="col-md-6">
                        <img class="img-thumbnail border-0 h-100 w-100" src="assets/img/banner/perusahaan.png" alt="" srcset="">
                    </div>

                    <div class="col-md-6">
                        <div class="container-fluid d-flex justify-content-center my-3">
                            <h3 class=" text-center text-lg-start ">OriStore</h3>
                        </div>
                        <p class="text-lg-start ">OriStore adalah sebuah perusahaan yang menyediakan banyak barang Perangkat Keras sepert Laptop, Keyboard, Mouse dan lainnya. </p>
                        <p class="text-lg-start ">Selamat datang di perusahaan kami, pilihan utama bagi pecinta teknologi yang mencari solusi terbaik untuk kebutuhan komputasi. Sebagai pemimpin industri, kami menyediakan produk berkualitas tinggi mulai dari komputer canggih hingga aksesori terkini seperti mouse, headset, dan monitor. Dengan komitmen terhadap kualitas, layanan pelanggan yang unggul, dan harga bersaing, kami berupaya memberikan nilai tambah kepada setiap pelanggan. Bersama-sama, kita membangun masa depan digital yang lebih baik dengan teknologi yang memudahkan hidup. Selamat berbelanja di perusahaan kami, di mana inovasi dan kepuasan pelanggan menjadi prioritas utama.</p>

                        <a class="text-lg-start" data-aos="fade-up" data-aos-duration="1500" href="#product"><button class="btn btn-warning">Lihat Produk<i class="fa fa-long-arrow-right ms-3" aria-hidden="true"></i> </button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- Services-->
    <section class="page-section mb-5" id="services">
        <div class="container">
            <div class="text-center" data-aos="fade-down" data-aos-duration="1500">
                <h2 class="section-heading text-uppercase text-warning mb-5" style="margin-bottom:50px !important ;">Services</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                    <span class="fa-stack fa-4x">
                        <img class="img-thumbnail border-0" src="assets/img/icon/delivery24.png" alt="" srcset="">
                    </span>
                    <h4 class="my-3">PELAYANAN</h4>
                    <p class="text-muted">Menghadirkan kenyamanan dalam setiap detik. Layanan kami selalu terbuka 24 jam untuk memenuhi kebutuhan Anda.</p>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                    <span class="fa-stack fa-4x">
                        <img class="img-thumbnail border-0" src="assets/img/icon/high-quality.png" alt="" srcset="">
                    </span>
                    <h4 class="my-3">KUALITAS</h4>
                    <p class="text-muted">Kualitas terbaik adalah pilar utama dalam setiap langkah kami. Kami percaya bahwa kepuasan pelanggan bermula dari produk dan layanan yang tak tertandingi.</p>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                    <span class="fa-stack fa-4x">
                        <img class="img-thumbnail border-0" src="assets/img/icon/payment.png" alt="" srcset="">
                    </span>
                    <h4 class="my-3">Aman Pembayaran</h4>
                    <p class="text-muted">Keamanan adalah prioritas kami dalam setiap transaksi. Dengan sistem pembayaran aman kami, Anda dapat berbelanja dengan keyakinan dan ketenangan hati.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section bg-body-secondary" id="product">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-warning" data-aos="fade-down" data-aos-duration="1500" style="margin-bottom:50px !important ;">Product</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <img class="img-thumbnail" src="assets/img/product/Laptop/Laptop.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Laptop</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">NoteBook</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <img class="img-thumbnail" src="assets/img/product/Keyboard/Keyboard.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Keyboard</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">Accessories</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <img class="img-thumbnail" src="assets/img/product/Mouse/Mouse.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Mouse</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">Accessories</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <img class="img-thumbnail" src="assets/img/product/Kabel/hdmi.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Kabel HDMI</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">Accessories</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <img class="img-thumbnail" src="assets/img/product/Monitor/monitor.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Monitor</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">Monitor</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <img class="img-thumbnail" src="assets/img/product/Headset/headset.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <h5 class="subheading text-center mt-2">Headphone</h5>
                                <div class="portfolio-caption-subheading text-muted text-center">Accessories</div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <a class="text-center" data-aos="fade-up" data-aos-duration="1500" href="login"><button class="btn btn-warning">Lihat Produk Lainnya<i class="fa fa-long-arrow-right ms-3" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <section class="d-flex justify-content-between p-4" style="background-color: rgba(0, 0, 0, 0.2)">
            <!-- Left -->
            <div class="me-5">
                <h3 class="section-heading text-center d-flex" style="justify-content: center;">Get In Touch</h3>
            </div>
            <!-- Left -->

        </section>


        <!-- Section: Links  -->
        <section class="" id="contact">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-2">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h1 class="text-uppercase fw-bold text-warning">OriStore</h1>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 0px" />
                        <p>
                            Disini kamu bisa melihat barang komputer apapun dan bisa berbelanja sepuasnya. Disini juga tersedia berbagai macam barang aksesoris seperti keyboard, mouse dan lainnya.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold text-warning">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#product" class="text-white text-decoration-none">Laptop</a>
                        </p>
                        <p>
                            <a href="#product" class="text-white text-decoration-none">Keyboard</a>
                        </p>
                        <p>
                            <a href="#product" class="text-white text-decoration-none">Mouse</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold text-warning">Category</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#product" class="text-white text-decoration-none">NoteBook</a>
                        </p>
                        <p>
                            <a href="#product" class="text-white text-decoration-none">Accessories</a>
                        </p>
                        <p>
                            <a href="#product" class="text-white text-decoration-none">Monitor</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold text-warning">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <a class="text-decoration-none text-light hover-yellow" href="#">
                            <p><i class="fa fa-facebook mr-3 me-2 text-light"></i>Facebook</p>
                        </a>
                        <a class="text-decoration-none text-light" href="#">
                            <p><i class="fa fa-twitter mr-3 me-2 text-light"></i>Twitter</p>
                        </a>
                        <a class="text-decoration-none text-light" href="#">
                            <p><i class="fa fa-whatsapp mr-3 me-2 text-light"></i>WhatsApp</p>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white text-decoration-none" href="#home">OriStore.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Laptop</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/product/Laptop/Laptop.png" alt="..." />
                                <p>Laptop adalah perangkat komputasi portabel yang menyediakan akses mudah dan mobilitas. Dengan desain ringkas, layar tajam, dan keyboard ergonomis, laptop menggabungkan kekuatan komputer desktop dalam satu unit. Didukung oleh prosesor canggih dan penyimpanan yang cukup, laptop memungkinkan eksekusi tugas kompleks dan multitasking. Konektivitas yang luas memfasilitasi hubungan dengan perangkat eksternal, sementara kamera web dan mikrofon mendukung panggilan video. Dengan baterai tahan lama, laptop menjadi alat serba guna untuk pekerjaan dan hiburan, membuka aksesibilitas dan produktivitas di mana pun.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        NoteBook
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Keyboard</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/product/Keyboard/Keyboard.jpeg" alt="..." />
                                <p>Keyboard adalah perangkat input penting dengan tombol yang ergonomis, memfasilitasi pengguna untuk memasukkan data dan mengendalikan komputer. Desain ringkas dan kemampuan plug-and-play membuatnya sesuai untuk berbagai perangkat. Beberapa keyboard dilengkapi fitur tambahan seperti shortcut, lampu latar, dan pengaturan ketinggian. Dalam era komputasi modern, keyboard memiliki peran sentral dalam berbagai kegiatan, dari mengetik dokumen hingga bermain game. Dengan teknologi nirkabel, keyboard semakin fleksibel dalam penggunaannya.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        Accessories
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Mouse</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/product/Mouse/Mouse.png" alt="..." />
                                <p>Mouse adalah perangkat input penting untuk mengendalikan komputer dengan desain ergonomis dan sensor responsif. Dengan tombol utama, roda gulir, dan teknologi nirkabel, mouse memungkinkan pengguna melakukan berbagai tugas, dari produktivitas hingga bermain game. Desain ringkas dan portabilitas membuatnya praktis digunakan di berbagai situasi, menjadikannya perangkat esensial dalam pengalaman pengguna komputer.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        Accessories
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Kabel HDMI</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/product/Kabel/hdmi.png" alt="..." />
                                <p>HDMI atau High-Definition Multimedia Interface adalah antarmuka digital yang umum digunakan untuk menghubungkan perangkat audio dan video seperti komputer, televisi, dan konsol permainan. Dengan kemampuannya mentransmisikan sinyal audio dan video berkualitas tinggi melalui satu kabel, HDMI mendukung resolusi definisi tinggi, termasuk 4K dan 8K. Keuntungan utama HDMI meliputi transmisi sinyal digital tanpa kehilangan kualitas, perlindungan konten melalui HDCP, dan fitur tambahan seperti Consumer Electronics Control (CEC) untuk mengendalikan perangkat terhubung. Dengan konektor yang kompak, HDMI telah menjadi standar industri untuk mengoptimalkan pengalaman multimedia dan hiburan di rumah.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        Accessories
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Monitor</h2>
                                <img class="img-fluid d-block mx-auto" src="https://pngimg.com/uploads/monitor/monitor_PNG101653.png" alt="..." />
                                <p>Monitor adalah perangkat keras komputer yang berfungsi sebagai tampilan visual dari data yang diproses oleh komputer. Dengan menggunakan layar datar, monitor mampu menampilkan teks, gambar, grafik, dan video secara visual, memungkinkan pengguna untuk melihat dan berinteraksi dengan informasi yang dihasilkan oleh komputer. Terhubung ke unit sentral komputer melalui kabel seperti VGA, HDMI, atau DisplayPort, monitor memiliki berbagai parameter seperti resolusi layar, ukuran layar, tingkat kecerahan, kontrast, dan refresh rate yang memengaruhi pengalaman pengguna dalam melihat dan berinteraksi dengan tampilan monitor. Ada berbagai jenis monitor, termasuk CRT, LCD, LED, dan touchscreen, yang menggunakan teknologi berbeda-beda.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        Monitor
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Headphone</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/product/Headset/headset.png" alt="..." />
                                <p>Headphone adalah perangkat audio yang digunakan untuk mendengarkan suara secara pribadi. Mereka terdiri dari sepasang speaker miniatur yang ditempatkan di atas atau di dalam telinga pengguna, memungkinkan penyajian suara tanpa mengganggu orang di sekitarnya. Jenis headphone meliputi on-ear, over-ear, in-ear, dan wireless. Dengan kemampuan untuk terhubung ke berbagai perangkat audio, seperti pemutar musik, ponsel, atau komputer, headphone digunakan untuk berbagai keperluan, mulai dari mendengarkan musik hingga bermain game. Keberagaman jenis dan model membuat headphone menjadi perangkat audio yang populer untuk pengalaman mendengarkan pribadi.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Category:</strong>
                                        Accessories
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrapjs/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrapjs/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="assets/css/aos-master/aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>