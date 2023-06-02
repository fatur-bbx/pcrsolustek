<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PCR Solustek Admin - <?= $title ?></title>
    <link href="<?= base_url() ?>/assets/admin/main/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?= base_url() ?>/assets/admin/main/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="far fa-building"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PCR Solustek <sup><?= date('Y') ?></sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item <?= ($title == "Dashboard") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/")?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item <?= ($title == "Layanan") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/layanan")?>">
                    <i class="fab fa-buffer"></i>
                    <span>Layanan</span></a>
            </li>
            <li class="nav-item <?= ($title == "Wawancara") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/wawancara")?>">
                    <i class="far fa-comment-dots"></i>
                    <span>Wawancara</span></a>
            </li>
            <li class="nav-item <?= ($title == "Projek Terlibat") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/projek_terlibat")?>">
                    <i class="far fa-thumbs-up"></i>
                    <span>Projek Terlibat</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Informasi Perusahaan
            </div>
            <li class="nav-item <?= ($title == "Profil Perusahaan") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/profil")?>">
                    <i class="far fa-building"></i>
                    <span>Profil Perusahaan</span></a>
            </li>
            <li class="nav-item <?= ($title == "Tentang Perusahaan") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/perusahaan")?>">
                    <i class="fas fa-info"></i>
                    <span>Tentang Perusahaan</span></a>
            </li>
            <li class="nav-item <?= ($title == "Visi Misi Perusahaan") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/visimisi")?>">
                    <i class="fas fa-puzzle-piece"></i>
                    <span>Visi Misi Perusahaan</span></a>
            </li>
            <li class="nav-item  <?= ($title == "Kontak Perusahaan") ? "active" : "" ; ?>">
                <a class="nav-link" href="<?= base_url("/index.php/Secret/kontak")?>">
                    <i class="fas fa-phone"></i>
                    <span>Kontak Perusahaan</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url() ?>/assets/admin/main/img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="<?= base_url() . "index.php/Secret/login" ?>" method="post">
                                    <button class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal" type="submit" name="logout">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">