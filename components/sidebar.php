<aside class="main-sidebar sidebar-dark-grey elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/dinus.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Poliklinik</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b><?php echo $username ?></b></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search"
                    style="background-color: black;">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills-dark nav-sidebar flex-column" data-widget="treeview" role="menu"data-accordion="false">
                <li class="nav-item menu-open ">
                    <!-- <a href="#" class="nav-link active">
                        <i class="nav-icon fas fas fa-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> -->
                    <?php
                    if ($_SESSION['akses'] == "admin") {
                        ?>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link">
                                    <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                    <p>Dashboard <span class="right badge badge-danger">Admin</span></p>
                                </a>
                            </li>
                            <li class="nav-item" style="color: black;">
                                <a href="dokter.php" class="nav-link">
                                    <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                    <p>Dokter <span class="right badge badge-danger">Admin</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pasien.php" class="nav-link">
                                    <i class="fas fa-solid fa-user nav-icon"></i>
                                    <p>Pasien <span class="right badge badge-danger">Admin</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="poli.php" class="nav-link">
                                    <i class="fas fa-solid fa-hospital nav-icon"></i>
                                    <p>Poli <span class="right badge badge-danger">Admin</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="obat.php" class="nav-link">
                                    <i class="fas fa-solid fa-tablets nav-icon"></i>
                                    <p>Obat <span class="right badge badge-danger">Admin</span></p>
                                </a>
                            </li>
                            
                        </ul>
                    <?php } else if ($_SESSION['akses'] == "dokter") { ?>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dashboard.php" class="nav-link">
                                        <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                        <p>Dashboard <span class="right badge badge-success">Dokter</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="jadwalPeriksa.php" class="nav-link">
                                        <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                        <p>Jadwal Periksa <span class="right badge badge-success">Dokter</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="memeriksaPasien.php" class="nav-link">
                                        <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                        <p>Memeriksa Pasien <span class="right badge badge-success">Dokter</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="riwayatPasien.php" class="nav-link">
                                        <i class="fas fa-solid fa-book-medical nav-icon"></i>
                                        <p>Riwayat Pasien <span class="right badge badge-success">Dokter</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="profilDokter.php" class="nav-link">
                                        <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                        <p>Profil <span class="right badge badge-success">Dokter</span></p>
                                    </a>
                                </li>
                            </ul>
                    <?php } else if ($_SESSION['akses'] == "pasien") { ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="dashboard.php" class="nav-link">
                                            <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                            <p>Dashboard <span class="right badge badge-info">Pasien</span></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="daftarPoliklinik.php" class="nav-link">
                                            <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                            <p>Daftar Poli <span class="right badge badge-info">Pasien</span></p>
                                        </a>
                                    </li>
                                </ul>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a href="pages/logout/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>