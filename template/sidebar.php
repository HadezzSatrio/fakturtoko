<?php
function active($currect_page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active bg-success'; //class name in css
    }
}
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-success">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-success">
        <span class="brand-text font-weight-light">
            <h1>SIF</h1>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar4.png" class="img-circle elevation-3" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Satrio Noto Negoro</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?php //active('dashboard.php'); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a href="#" class="nav-link <?php //active('user.php'); ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p> Data Faktur</p>
                    </a>
                </li> -->
                
                <li class="nav-item menu-open active">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Master<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="databarang.php" class="nav-link <?php active('databarang.php'); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="datapemasok.php" class="nav-link <?php active('datapemasok.php'); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pemasok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="datafaktur.php" class="nav-link <?php active('datafaktur.php'); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Faktur</p>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="#" class="nav-link <?php //active('data_kelompok.php'); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kelompok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php //active('data_personil.php'); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Personil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open active">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Absensi<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php// active('data_absensi.php'); ?>">
                                <i class="nav-icon fas fa-solid fa-table"></i>
                                <p>Absensi Personil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php //active('hasil_absensi.php'); ?>">
                                <i class="nav-icon fas fa-solid fa-table"></i>
                                <p>Data Hasil Absensi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php// active('rekapabsensipersonil.php'); ?>">
                        <i class="nav-icon fas fa-solid fa-book"></i>
                        <p>Rekap</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" onclick="confirmLogout()">
                        <i class="nav-icon fas fa-solid fa-lock"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>