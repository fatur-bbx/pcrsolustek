<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-11">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="slide-content d-flex
                                    align-items-center">
                            <div class="single-slide">
                                <h1 data-aos="fade-right" data-aos-delay="200">Selamat datang
                                    di<br>PT. PCR Solustek
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="texture"></div>
    <div class="diag-bg"></div>
</section>
<section class="cta" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
        <div class="cta-content d-xl-flex align-items-center
                    justify-content-around text-center text-xl-left">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>PT. PCR Solustek</h2>
                <p>
                    <?= $tentang[0]["tentang_singkat"] ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="title text-center">
            <h1 class="title-blue">Layanan</h1>
        </div>
    </div>
</section>
<section class="recent-posts" id="layanan">
    <div class="container">
        <div class="row">
            <?php $i = 1; ?>
            <?php $genap = false ?>
            <?php foreach ($menu as $layanan) : ?>
                <?php if ($genap) : ?>
                    <div class="row">
                    <?php endif; ?>
                    <?php if ($i % 2 == 1) { ?>
                        <!-- Ganjil -->
                        <div class="col-lg-6">
                            <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-<?= ($i % 2 == 1) ? 'right' : 'left'; ?>" data-aos-duration="800">
                                <div class="post-content <?= ($i % 2 == 1) ? 'text-sm-right' : ''; ?>">
                                    <h3><a href="<?= base_url('/index.php/home/layanan/' . $layanan["layanan_id"]) ?>"><?= $layanan["layanan_nama"] ?></a></h3>
                                    <a class="post-btn" href="<?= base_url('/index.php/home/layanan/' . $layanan["layanan_id"]) ?>"><i class="fa
                                        fa-arrow-right"></i></a>
                                </div>
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/main/assets/images/uploaded/layanan/').$layanan["gambar_layanan_nama_file"] ?>" alt="Post 1">
                                </div>
                            </div>
                        </div>
                        <?php $genap = false ?>
                    <?php } else { ?>
                        <!-- Genap -->
                        <div class="col-lg-6">
                            <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/main/assets/images/uploaded/layanan/').$layanan["gambar_layanan_nama_file"] ?>" alt="Post 1">
                                </div>
                                <div class="post-content">
                                    <h3><a href="<?= base_url('/index.php/home/layanan/' . $layanan["layanan_id"]) ?>"><?= $layanan["layanan_nama"] ?></a></h3>
                                    <a class="post-btn" href="<?= base_url('/index.php/home/layanan/' . $layanan["layanan_id"]) ?>"><i class="fa
                                        fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php $genap = true ?>
                    <?php } ?>
                    <?php if ($genap) : ?>
                    </div>
                <?php endif; ?>
                <?php $i++ ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="testimonial-and-clients">
    <div class="container">
        <div class="testimonials">
            <div class="swiper-container test-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($wawancara as $w) : ?>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img src="<?= base_url('assets/main/assets/images/uploaded/wawancara/') ?><?= $w["wawancara_gambar"] ?>" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-offset="0">
                                        <?= $w["wawancara_nama"] ?>
                                    </h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600" data-aos-offset="0">
                                        <?= $w["wawancara_siapa_yang_diwawancara"] ?>
                                    </span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600" data-aos-offset="0">
                                        <?= $w["wawancara_isi"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="test-pagination"></div>
            </div>
        </div>
        <!-- <div class="clients" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="600">
                    <div class="swiper-container clients-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/assets/main/assets/images/client1.png" alt="Client
                                    1">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/client2.png" alt="Client
                                    2">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/client3.png" alt="Client
                                    3">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/client4.png" alt="Client
                                    4">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/client5.png" alt="Client
                                    5">
                            </div>
                        </div>
                        <div class="test-pagination"></div>
                    </div>
                </div> -->
    </div>
</section>