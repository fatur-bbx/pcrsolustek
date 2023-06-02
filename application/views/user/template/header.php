<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT. PCR Solustek | <?= $title?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/loader/loaders.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/aos/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/main/assets/css/responsive.css">

    <style>
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        cursor: pointer;
    }

    .dropbtn:hover {
        cursor: pointer;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
        position: relative;
    }

    .topnav a {
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .active {
        background-color: #04AA6D;
        color: white;
    }
    </style>
</head>

<body>
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center
                justify-content-center"></div>
    </div>
    <header class="position-absolute w-100">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between
                    align-items-center">
                <div class="contact">
                    <a href="tel:+<?= $kontak[0]["kontak_nomor_hp"] ?>" class="tel"><i class="fa
                                fa-phone" aria-hidden="true"></i>+<?= $kontak[0]["kontak_nomor_hp"] ?></a>
                    <a href="mailto:<?= $kontak[0]["kontak_email"]?>"><i class="fa fa-envelope"
                            aria-hidden="true"></i><?= $kontak[0]["kontak_email"]?></a>
                </div>
                <nav class="d-flex aic">
                    <ul class="nav social d-none d-md-flex">
                        <li><a href="https://wa.me/<?= $kontak[0]["kontak_whatsapp"] ?>" target="_blank"><i
                                    class="fa fa-whatsapp"></i></a></li>
                        <li><a href="mailto:<?= $kontak[0]["kontak_email"]?>"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="https://instagram.com/<?= $kontak[0]["kontak_instagram"] ?>" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?= base_url() ?>">PT. PCR Solustek</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" draggable="true">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Beranda</a></li>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropbtn">Layanan</a>
                            <div class="dropdown-content">
                                <?php foreach($menu as $m) : ?>
                                <a
                                    href="<?= base_url("index.php/Home/layanan/".$m["layanan_id"])?>"><?= $m["layanan_nama"]?></a>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropbtn">Tentang</a>
                            <div class="dropdown-content">
                                <a href="<?= base_url("index.php/Home/tentang/Perusahaan") ?>">Perusahaan</a>
                                <a href="<?= base_url("index.php/Home/tentang/Visi Misi") ?>">Visi Misi</a>
                                <a href="<?= base_url("index.php/Home/tentang/Profil") ?>">Profil</a>
                                <a href="<?= base_url("index.php/Home/tentang/Profil") ?>">Projek Terlibat</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropbtn">Kontak</a>
                            <div class="dropdown-content">
                                <a href="https://wa.me/<?= $kontak[0]["kontak_whatsapp"] ?>">Whatsapp</a>
                                <a href="mailto:<?= $kontak[0]["kontak_email"]?>">Email</a>
                                <a href="https://instagram.com/<?= $kontak[0]["kontak_instagram"] ?>">Instagram</a>
                            </div>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Secret/login') ?>">Login</a></li>
                    </ul>
                </div>
            </nav>
            <div class="topnav d-lg-none">
                <div id="mobilenavbar" style="display: none;">
                    <a href="">Beranda</a>
                    <a onclick="layananmobile()">Layanan</a>
                    <div id="layananmenumobile" style="display: none;">
                        <?php foreach($menu as $m) : ?>
                        <a
                            href="<?= base_url("index.php/Home/layanan/".$m["layanan_id"])?>" style="color: green;"><?= $m["layanan_nama"]?></a>
                        <?php endforeach;?>
                    </div>
                    <a onclick="tentangmobile()">Tentang</a>
                    <div id="tentangmenumobile" style="display: none;">
                        <a href="<?= base_url("index.php/Home/tentang/Perusahaan") ?>" style="color: green;">Perusahaan</a>
                        <a href="<?= base_url("index.php/Home/tentang/Visi Misi") ?>" style="color: green;">Visi Misi</a>
                        <a href="<?= base_url("index.php/Home/tentang/Profil") ?>" style="color: green;">Profil</a>
                        <a href="<?= base_url("index.php/Home/tentang/Profil") ?>" style="color: green;">Projek Terlibat</a>
                    </div>
                    <a onclick="kontakmobile()">Kontak</a>
                    <div id="kontakmenumobile" style="display: none;">
                        <a href="https://wa.me/<?= $kontak[0]["kontak_whatsapp"] ?>" style="color: green;">Whatsapp</a>
                        <a href="mailto:<?= $kontak[0]["kontak_email"]?>" style="color: green;">Email</a>
                        <a href="https://instagram.com/<?= $kontak[0]["kontak_instagram"] ?>" style="color: green;">Instagram</a>
                    </div>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="mobnav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </header>
    <script>
    function mobnav() {
        var x = document.getElementById("mobilenavbar");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function tentangmobile() {
        var x = document.getElementById("tentangmenumobile");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function kontakmobile() {
        var x = document.getElementById("kontakmenumobile");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function layananmobile() {
        var x = document.getElementById("layananmenumobile");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    </script>