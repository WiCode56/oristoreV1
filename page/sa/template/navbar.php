        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark fixed-top">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-warning fw-bold fs-3" href="index">OriStore</a>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            
            <div class="d-none d-md-inline-block ms-auto me-0 me-md-3 my-2 my-md-0">
                <span id="ct" class="text-white"></span>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION['username']; ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index?halaman=404"><i class="fa-solid fa-user me-2"></i>Profile</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="setting/logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>