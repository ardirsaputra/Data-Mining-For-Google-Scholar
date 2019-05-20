<?php
class Layout
{
    public static function Header($judul)
    {
        return '
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>' . $judul . '</title>
            <link rel="stylesheet" href="./vendors/iconfonts/mdi/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
            <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
            <link rel="stylesheet" href="./vendors/iconfonts/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="./css/costum.css">
            <link rel="shortcut icon" href="./images/favicon.png" />
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        </head>';
    }
    public static function Footer()
    {
        if (!isset($_COOKIE['hello'])) {
            $content = "Swal.fire({
                title: 'Welcome!',
                text: '50 Data Google Scholar in University of Indonesia',
                type: '',
                confirmButtonText: 'Yeay!'
              })";
            setcookie('hello', '1', time() + 60 * 60, '/', null, null, null);
        } else {
            $content = "";
        }
        if (isset($_COOKIE['notif'])) {
            $content1 = $_COOKIE['notif'];
        } else {
            $content1 = ' ';
        }
        return '
        <script>' . $content . ' ' . $content1 . '</script>
        <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
                <a href="http://www.github.com/ardirsaputra" target="_blank">ARS</a>. All rights reserved.</span>
            <span class="float-none float-sm-right text-muted d-block mt-1 mt-sm-0 text-center">
                <a href="https://codepen.io/ardiragilsaputra/full/yxoOOm/" target="_blank">Ars</a>
            </span>
        </div>
        </footer>
        <script src="./vendors/js/vendor.bundle.base.js"></script>
        <script src="./vendors/js/vendor.bundle.addons.js"></script>
        <script src="./js/off-canvas.js"></script>
        <script src="./js/misc.js"></script>
         <script src="./js/dashboard.js"></script>
         
        ';
    }
    public static function Message($msg, $judul, $type, $tombol)
    {
        if ($msg != '') {
            if ($type == 1) {
                $msg = "
                Swal.fire({
                    title: '" . $judul . "',
                    animation: false,
                    type: 'success',
                    html: '" . $msg . "',
                    showCloseButton: true,
                    confirmButtonText:'" . $tombol . "',
                    customClass: {
                        popup: 'animated tada'
                    }
                })
                ";
            } else if ($type == 2) {
                $msg = "
                Swal.fire({
                    title: '" . $judul . "',
                    animation: false,
                    type: 'warning',
                    html: '" . $msg . "',
                    showCloseButton: true,
                    confirmButtonText:'" . $tombol . "',
                    customClass: {
                        popup: 'animated tada'
                    }
                })
                ";
            } else if ($type == 3) {
                $msg = "
                    Swal.fire({
                        title: '" . $judul . "',
                        animation: false,
                        type: 'error',
                        html: '" . $msg . "',
                        showCloseButton: true,
                        confirmButtonText:'" . $tombol . "',
                        customClass: {
                          popup: 'animated tada'
                        }
                    })
                ";
            }
        } else {
            return  '';
        }
        return '<script> ' . $msg  . '</script>';
    }
    public static function Page($judul, $msg, $judul_notif, $type, $tombol, $isi)
    {
        return '
        <!DOCTYPE html>
        <html lang="en">
            ' . self::Header($judul) . '
        <body>
            <div class="container-scroller">
                ' . self::Navbar() . '
                <div class="container-fluid page-body-wrapper">
                    ' . self::Sidebar() . '
                    ' . self::Message($msg, $judul_notif, $type, $tombol) . '
                    <div class="main-panel">

                        <div class="content-wrapper">
                        ' . $isi . '
                        </div>
                        ' . self::Footer() . '
                    </div>
                </div>

            </div>
        </body>
        </html>    
        ';
    }
    public static function Sidebar()
    {
        return '
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
                        <i  class="menu-icon fa fa-search"></i>
                        <span class="menu-title">Pencarian</span> 
                    </a>
                 </li>
                
            </ul>
        </nav>
        <div class="modal" id="search">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="forms-sample" action="./search.php" method="get">
                            <div class="form-group row">  
                                <div class="input-group col-sm-12">
                                    <input type="text" name="search" class="form-control" placeholder="Pencarian... " aria-label="Pencarian..." aria-describedby="colored-addon3">
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
        ';
    }
    public static function Navbar()
    {
        return '
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="./" >
                    DM Google Scholar
                </a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <!--User account top-right-->
                </ul>
            </div>
        </nav>
        ';
    }
    public static function IndexHTML()
    {
        $query = "SELECT * FROM user ";
        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
            if ($sort == "name") {
                $query .= "ORDER BY name ASC";
            } elseif ($sort == "affiliation") {
                $query .= "ORDER BY affiliation ASC";
            } elseif ($sort == "total_cites") {
                $query .= "ORDER BY total_cites ASC";
            } elseif ($sort == "h_index") {
                $query .= "ORDER BY h_index ASC";
            } elseif ($sort == "i10_index") {
                $query .= "ORDER BY i10_index ASC";
            } elseif ($sort == "fields") {
                $query .= "ORDER BY fields ASC";
            }
        } else {
            $query .= "ORDER BY total_cites DESC";
        }

        $datauser = DB::query($query);
        $renderer = '';
        $iterasi = 1;
        foreach ($datauser as $i) {
            if ($i['homepage'] == NULL) {
                $home = '';
            } else {
                $home = '<a href="' . $i['homepage'] . '">' . substr($i['homepage'], 7) . '</a>';
            }
            $renderer .= '
            <tr>
            <td>' . $iterasi . '</td>
            <td><a href="./user.php?id=' . $i['id'] . '" class="text-black"> <img src="https://scholar.google.co.id/citations?view_op=small_photo&user=' . $i['id'] . '&citpid=1" alt="foto google scholar" /> &nbsp ' . $i['name'] . '</a></td>
            <td>' . setLimitString($i['affiliation']) . '</td>
            <td>' . $i['total_cites'] . '</td>
            <td>' . $i['h_index'] . ' </td>
            <td>' . $i['i10_index'] . ' </td>
            <td>' . substr($i['fields'], 17) . ' </td>
            <td>' . $home . ' </td>
            </tr>

            ';
            $iterasi++;
        }
        $civitas = count(DB::query('SELECT * FROM user'));
        $publikasi = count(DB::query('SELECT * FROM publications'));
        $sitasi = DB::query("SELECT SUM(total_cites) FROM user")[0][0];
        $avgh_index = DB::query('SELECT AVG(h_index) FROM user')[0][0];
        $content = '
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                       <p class="h3 text-left"><img src="http://www.ui.ac.id/wp-content/uploads/2014/07/makara-web.png" alt="logo ui" /></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="fa fa fa-user-circle-o text-primary icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Total Dosen Teregister</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                        ' . $civitas . '
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
                                <i class="fa  fa-stack-overflow text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Total Dokumen Publikasi</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                        ' . $publikasi . '
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
                                <p class="mb-0 text-right">Total Sitasi</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                        ' . $sitasi . '
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
                                <i class="fa fa-caret-square-o-up text-info icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Rata-rata H Index</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0 font-cash-card">
                                        ' . $avgh_index . '
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
                 <div class="table-responsive">    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Affiliation</th>
                                <th>Total Cites</th>
                                <th>H</th>
                                <th>i10</th>
                                <th>fields</th>
                                <th>Homepage</th>
                                    
                            </tr>
                        </thead>
                        <tbody>

                            ' . $renderer . '
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>';
        //} else { }
        return $content;
    }
    public static function Pencarian($pencarian)
    {
        $datauser = DB::query('SELECT * FROM user WHERE name LIKE :name LIMIT 500', array(':name' => '%' . $pencarian . '%'));
        $datapublikasi = DB::query('SELECT * FROM publications WHERE title LIKE :name LIMIT 500', array(':name' => '%' . $pencarian . '%'));
        $renderuser = '';
        $renderpublikasi = '';
        if (count($datauser) >= 1) {
            $iterasi = 1;
            foreach ($datauser as $i) {
                if ($i['homepage'] == NULL) {
                    $home = '';
                } else {
                    $home = '<a href="' . $i['homepage'] . '">' . substr($i['homepage'], 7) . '</a>';
                }
                $renderuser .= '
                <tr>
                <td>' . $iterasi . '</td>
                <td><a href="./user.php?id=' . $i['id'] . '" class="text-black"> <img src="https://scholar.google.co.id/citations?view_op=small_photo&user=' . $i['id'] . '&citpid=1" alt="foto google scholar" /> &nbsp ' . $i['name'] . '</a></td>
                <td>' . setLimitString($i['affiliation']) . '</td>
                <td>' . $i['total_cites'] . '</td>
                <td>' . $i['h_index'] . ' </td>
                <td>' . $i['i10_index'] . ' </td>
                <td>' . substr($i['fields'], 17) . ' </td>
                <td>' . $home . ' </td>
                </tr>
    
                ';
                $iterasi++;
            }
            $renderuser = '
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                Hasil pencarian civitas dengan kata kunci "' . $pencarian . '" dengan hasil ' . count($datauser) . '
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                
                                <th>No</th>
                                <th>Nama</th>
                                <th>Affiliation</th>
                                <th>Total Cites</th>
                                <th>H</th>
                                <th>i10</th>
                                <th>fields</th>
                                <th>Homepage</th>
                                </tr>
                            </thead>
                            <tbody>
                            ' . $renderuser . '
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
        if (count($datapublikasi) >= 1) {
            $iterasi = 1;
            foreach ($datapublikasi as $i) {
                $author = '<a href="./user.php?id=' . $i['user_id'] . '">' . DB::query('SELECT * FROM user WHERE id = :id', array(':id' => $i['user_id']))[0]['name'] . '</a>';
                $renderpublikasi .= "<tr><td>" . $iterasi . "</td><td>" . setLimitString($i['title'], 50) . "</td><td>" . $author . "</td><td>" . $i['cites'] . "</td><td>" . $i['year'] . "</td></tr>";
                $iterasi++;
            }
            $renderpublikasi = '
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                Hasil pencarian publikasi dengan kata kunci "' . $pencarian . '" dengan hasil ' . count($datapublikasi) . '
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Jumlah Dikutip</th>
                                <th>Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                            ' . $renderpublikasi . '
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
        return '
            <div  class= "row">
                ' . $renderuser . '
                ' . $renderpublikasi  . '
            </div>';
    }
}
