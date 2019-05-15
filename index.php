<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Scholar UI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/costum.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon2.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <div class="modal" id="search">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="forms-sample" action="./search.php" method="post">
                            <div class="form-group row">
                                <div class="input-group col-sm-12">
                                    <input type="text" name="soal" class="form-control" placeholder="Cari Soal Disini" aria-label="Masukkan Nama" aria-describedby="colored-addon3">
                                    <div class="input-group-append bg-primary border-primary">
                                        <button class="btn btn-primary" type="submit">
                                            <span class="fa fa-search text-white"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times text-white"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="./">
                    <img src="images/Logo.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="./">
                    <img src="./images/favicon2.png" alt="logo" />
                </a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="#search" class="text-white" data-toggle="modal" data-target="#search">
                            <span class="fa fa-search"> Cari Soal ...</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <!--Message notif on top-right-->
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-file-document-box"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">Kamu Memilik 0 Kiriman Soal
                                </p>

                            </div>

                        </div>
                    </li>
                    <!--User account top-right-->
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">Ardi Ragil Saputra</span>
                            <img class="img-xs rounded-circle" src="./img.php?id=1" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <a class="dropdown-item" href="./user.php">
                                Biodata
                            </a>
                            <a class="dropdown-item" href="./rating.php">
                                Ratting </a>

                            <a class="dropdown-item" href="./collection.php">
                                Koleksi
                            </a>

                            <a class="dropdown-item" href="./setting.php">
                                Pengaturan
                            </a>
                            <a class="dropdown-item" href="./logout.php">
                                Keluar
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <!--The body start here-->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="user-wrapper">
                                <div class="profile-image">
                                    <img class="img-xs rounded-circle" src="./img.php?id=1" alt="profile image">
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name"><a href="./user.php?id=1">Ardi Ragil Saputra</a></p>
                                    <div>
                                        <small class="designation text-muted">Online</small>
                                        <span class="status-indicator online"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./">
                            <i class="menu-icon mdi mdi-home"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./search.php">
                            <i class="menu-icon fa fa-search"></i>
                            <span class="menu-title">Pencarian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#datakoleksi" aria-expanded="false" aria-controls="datakoleksi">
                            <i class="menu-icon mdi mdi-content-copy"></i>
                            <span class="menu-title">Koleksi Soal</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="datakoleksi">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./collection.php">
                                        <i class="menu-icon fa fa-dropbox"></i>
                                        <span class="menu-title">Koleksi</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a class="nav-link" href="./zip.php?id=1">
                                        <i class="menu-icon mdi mdi-pencil"></i>
                                        <span class="menu-title">Contoh Soal Matematika SD</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a class="nav-link" href="./zip.php?id=5">
                                        <i class="menu-icon mdi mdi-pencil"></i>
                                        <span class="menu-title">Zakaa Rekrutmen</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./record.php">
                            <i class="menu-icon fa fa-check-circle"></i>
                            <span class="menu-title">Data Hasil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./notification.php">
                            <i class="menu-icon fa fa-stack-exchange"></i>
                            <span class="menu-title">Notifikasi </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./rating.php">
                            <i class="menu-icon fa fa-star"></i>
                            <span class="menu-title">Rating Ku</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./setting.php">
                            <i class="menu-icon fa fa-gears"></i>
                            <span class="menu-title">Pengaturan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">
                            <i class="menu-icon fa fa-power-off"></i>
                            <span class="menu-title text-danger">Keluar</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <!--The Main Panel-->
            <div class="main-panel">

                <div class="content-wrapper">

                    <form class="forms-sample" action="./search.php" method="post">
                        <div class="form-group row">
                            <div class="input-group col-sm-12">
                                <div class="input-group-append bg-primary border-primary">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-list text-white"></span>
                                    </button>
                                </div>
                                <input type="text" name="soal" class="form-control" placeholder="Cari Soal disini" aria-label="Masukkan Nama" aria-describedby="colored-addon3">
                                <div class="input-group-append bg-primary border-primary">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-search text-white"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="forms-sample" action="./search.php" method="post">
                        <div class="form-group row">
                            <div class="input-group col-sm-12">
                                <div class="input-group-append bg-primary border-primary">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-user text-white"></span>
                                    </button>
                                </div>
                                <input type="text" name="u" class="form-control" placeholder="Cari Pengguna lain ..." aria-label="Masukkan Nama" aria-describedby="colored-addon3">
                                <div class="input-group-append bg-primary border-primary">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-search text-white"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-user-circle text-primary icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Jumlah Pengguna</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                                    42
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-file text-success icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Jumlah Judul Soal</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                                    4
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-list-alt text-info icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Jumlah Soal</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                                    30
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-edit text-warning icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Jumlah Peserta Soal</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                                    38
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="Text-light alert alert-info p-3 text-center">Soal Terbaru</h4>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Judul Soal</th>
                                            <th>Deskripsi</th>
                                            <th>Tingkat Soal</th>
                                            <th>Tanggal Pembuatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <span class="fa fa-unlock text-success"></span> <a class="text-black" href="./zip.php?id=6">Bahasa Indonesia</a>
                                            </td>
                                            <td>bahasa kita
                                            </td>
                                            <td>SD
                                            </td>
                                            <td> 11:18 , 13 Desember 2018
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fa fa-lock text-danger"></span> <a class="text-black" href="./zip.php?id=5">Zakaa Rekrutmen</a>
                                            </td>
                                            <td>Mengenal Dasar Pengetahuan dalam Pengembangan Software
                                            </td>
                                            <td>S1
                                            </td>
                                            <td> 21:09 , 07 Desember 2018
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fa fa-unlock text-success"></span> <a class="text-black" href="./zip.php?id=3">Pemrogramman web </a>
                                            </td>
                                            <td>Test seberapa tahu anda tentang web
                                            </td>
                                            <td>D3
                                            </td>
                                            <td> 12:18 , 27 November 2018
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fa fa-unlock text-success"></span> <a class="text-black" href="./zip.php?id=1">Contoh Soal Matematika SD</a>
                                            </td>
                                            <td>contoh soal
                                            </td>
                                            <td>SD
                                            </td>
                                            <td> 11:33 , 26 November 2018
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <br>

                </div>

                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                            <a href="http://www.zakaa.id/" target="_blank">Zakaa Studio</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right text-muted d-block mt-1 mt-sm-0 text-center">Pengembangan untuk Pendidikan Indonesia dari
                            <a href="https://codepen.io/ardiragilsaputra/full/yxoOOm/" target="_blank">Ars</a>
                        </span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>