<?php
include("require.php");
$type = "1";
$msg = "";
$judul_msg = '404';
$tombol = 'Ok!';
$judul = "Data Scholar UI";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (DB::query('SELECT * FROM user WHERE id = :id', array(':id' => $id))) {
        $datadb  = DB::query('SELECT * FROM user WHERE id = :id', array(':id' => $id))[0];
        //pretty($datadb);
        $id = $_GET['id'];
        $nama = $datadb[0][1];
        $affiliation = $datadb[0][2];
        $total_cites = $datadb[0][3];
        $h_index = $datadb[0][4];
        $i10_index = $datadb[0][5];
        $fields = $datadb[0][6];
        $homepage = $datadb[0][7];
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Data Scholar UI</title>
            <link rel="stylesheet" href="./vendors/iconfonts/mdi/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
            <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
            <link rel="stylesheet" href="./vendors/iconfonts/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="./css/costum.css">
            <link rel="shortcut icon" href="./images/favicon.png" />
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        </head>

        <body>
            <div class="container-scroller">

                <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                        <a class="navbar-brand brand-logo" href="./">
                            DM Google Scholar
                        </a>
                    </div>

                    <div class="navbar-menu-wrapper d-flex align-items-center">
                        <ul class="navbar-nav navbar-nav-right">
                            <!--User account top-right-->
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid page-body-wrapper">

                    <nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./">
                                    <i class="menu-icon mdi mdi-home"></i>
                                    <span class="menu-title">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#search" class="nav-link" data-toggle="modal" data-target="#search">
                                    <i class="menu-icon fa fa-search"></i><span class="menu-title"> Pencarian </span>
                                </a>
                            </li>
                    </nav>
                    </ul>
                    <div class="main-panel">

                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="Text-light alert alert-info p-3 text-center">Daftar Civitas Universitas Indonesia</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Line chart</h4>
                                            <canvas id="lineChart" style="height:250px"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <canvas id="myChart" width="" height="" style="width:10px;height:10px"></canvas>
                                <script>
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Red', 'Blue', 'Yellow'],
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [12, 19, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)'
                                                ],
                                                borderWidth: 0.5
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
                            <a href="http://www.zakaa.id/" target="_blank">ARS</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right text-muted d-block mt-1 mt-sm-0 text-center">
                            <a href="https://codepen.io/ardiragilsaputra/full/yxoOOm/" target="_blank">Ars</a>
                        </span>
                    </div>
                </footer>
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
                <script src="./vendors/js/vendor.bundle.base.js"></script>
                <script src="./vendors/js/vendor.bundle.addons.js"></script>
                <script src="./js/off-canvas.js"></script>
                <script src="./js/misc.js"></script>
                <script src="./js/dashboard.js"></script>
            </div>
        </body>

        </html>
    <?php
} else {
    $content = "Swal.fire({
            title: '404!',
            text: 'D Not Found',
            type: 'error',
            confirmButtonText: 'Ok!'
          })";
    setcookie('notif', $content, time() + 1, '/', null, null, null);
    redirect('./');
}
} else {
    $content = "Swal.fire({
        title: '404!',
        text: 'Invalid respone',
        type: 'error',
        confirmButtonText: 'Ok!'
      })";
    setcookie('notif', $content, time() + 1, '/', null, null, null);
    redirect('./');
}
