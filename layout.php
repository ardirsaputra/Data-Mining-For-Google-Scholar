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
            <link rel="shortcut icon" href="./images/favicon2.png" />
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
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                <a href="http://www.zakaa.id/" target="_blank">Zakaa Studio</a>. All rights reserved.</span>
            <span class="float-none float-sm-right text-muted d-block mt-1 mt-sm-0 text-center">Pengembangan untuk Pendidikan Indonesia dari
                <a href="https://codepen.io/ardiragilsaputra/full/yxoOOm/" target="_blank">Ars</a>
            </span>
        </div>
        </footer>
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <script src="vendors/js/vendor.bundle.addons.js"></script>
        <script src="js/off-canvas.js"></script>
        <script src="js/misc.js"></script>
         <script src="js/dashboard.js"></script>
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
                    </div>
                </div>
                <hr>
                ' . self::Footer() . '
            </div>
        </body>
        </html>    
        ';
    }
    public static function Sidebar()
    {
        return '
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">
                        <i class="menu-icon mdi mdi-home"></i>
                        <span class="menu-title">List User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./search.php">
                        <i class="menu-icon fa fa-search"></i>
                        <span class="menu-title">Pencarian</span>
                    </a>
                </li>
            </ul>
        </nav>
        ';
    }
    public static function Navbar()
    {
        return '
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="./">
                    <img src="./images/Logo.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="./">
                    <img src="./images/favicon.png" alt="logo" />
                </a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <!--User account top-right-->
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        ';
    }
    public static function IndexHTML()
    {
        $content = '';
        //} else { }
        return $content;
    }
}
