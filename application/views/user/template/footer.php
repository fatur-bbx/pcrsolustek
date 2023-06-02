<footer>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0" id="kontak">
                        <h6 class="widget-tiltle">&nbsp;</h6>
                        <div class="media">
                            <i class="fa fa-map-marker"></i>
                            <div class="media-body ml-3">
                                <h6>Alamat</h6>
                                Jl. Umban Sari<br>
                                Kampus Politeknik Caltex Riau<br>
                                No. 1<br>
                                RT. 001 RW. 007<br>
                                Umban Sari, Rumbai, Pekanbaru
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body ml-3">
                                <h6>Anda punya pertanyaan?</h6>
                                <a href="mailto:<?= $kontak[0]["kontak_email"]?>"><?= $kontak[0]["kontak_email"]?></a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-phone"></i>
                            <div class="media-body ml-3">
                                <h6>Hubungi</h6>
                                <a href="tel:+<?= $kontak[0]["kontak_nomor_hp"]?>" target="_blank">
                                    +<?= $kontak[0]["kontak_nomor_hp"]?></a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-whatsapp"></i>
                            <div class="media-body ml-3">
                                <h6>Whatsapp</h6>
                                <a href="http://wa.me/<?= $kontak[0]["kontak_whatsapp"]?>" target="_blank">+<?= $kontak[0]["kontak_whatsapp"]?></a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-instagram"></i>
                            <div class="media-body ml-3">
                                <h6>Instagram</h6>
                                <a href="https://instagram.com/<?= $kontak[0]["kontak_instagram"]?>" target="_blank">@<?= $kontak[0]["kontak_instagram"]?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="single-widget tags-widget" data-aos="fade-up" data-aos-delay="800">
                        <h6 class="widget-tiltle">Menu</h6>
                        <a href="<?= base_url() ?>">Beranda</a>
                        <a href="<?= base_url('/index.php/Home/tentang') ?>">Tentang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-note">
        <div class="container">
            <div class="footer-content text-center text-lg-left d-lg-flex
                        justify-content-between align-items-center">
                <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; <?= date('Y') ?> PT. PCR Solustek - Fatur.</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?= base_url() ?>/assets/main/assets/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/loaders.css.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/aos.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/swiper.min.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/lightgallery-all.min.js"></script>
<script src="<?= base_url() ?>/assets/main/assets/js/main.js"></script>
</body>

</html>