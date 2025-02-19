        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3 text-warning fw-bold fs-3" href="index">OriStore</a>
            </div>

            <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="container-fluid ms-2">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link text-uppercase" href="index">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="index?halaman=produk">Produk</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="index?halaman=404">Transaksi</a></li>
                    </ul>


                </div>

                <!-- Navbar-->
                <div class="container-fluid">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-3 ms-2" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <strong><?php echo $_SESSION['username']; ?></strong> </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index?halaman=404"><i class="fa-solid fa-user me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="index?halaman=404"><i class="fa-solid fa-cart-shopping me-2"></i>Riwayat Transaksi</a></li>
                                <li>
                                    <hr class="dropdown-divider"/>
                                </li>
                                <li><a class="dropdown-item" href="setting/logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
        </nav> -->