<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-11">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="slide-content d-flex
                                    align-items-center">
                            <div class="single-slide">
                                <h1 data-aos="fade-right" data-aos-delay="200"><?= $link?>
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
<section class="services">
    <div class="container">
        <div class="title text-center">
            <h1 class="title-blue"><?= $data["layanan_nama"] ?></h1>
            <p><?= $data["layanan_deskripsi"] ?></p>
        </div>
</section>
<section class="services">
    <div class="container">
        <div class="title text-center">
            <h1 class="title-blue">Gambar</h1>
        </div>
    </div>
</section>
<section class="recent-posts">
    <div class="container">
        <div class="row">
            <?php $i = 1?>
            <?php foreach($gambar as $img) : ?>
            <div class="col-lg">
                <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-<?= ($i%2==1) ? "right" : "left" ?>" data-aos-duration="800">
                    <div class="post-content text-sm-<?= ($i%2==1) ? "right" : "left" ?>">
                        <img src="<?= base_url() ?>assets/main/assets/images/uploaded/layanan/<?= $img['gambar_layanan_nama_file'] ?>" alt="Komisaris" class="rounded mx-auto d-block" width="540" height="100%">
                    </div>
                </div>
            </div>
            <?php $i++?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php if($wawancara != null) { ?>
<section class="testimonial-and-clients">
    <div class="container">
        <div class="testimonials">
            <div class="swiper-container test-slider">
                <div class="swiper-wrapper">
                    <?php foreach($wawancara as $w) : ?>
                    <div class="swiper-slide text-center">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                            <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img src="<?= base_url() ?>assets/main/assets/images/uploaded/wawancara/<?= $w["wawancara_gambar"]?>" alt="Testimonial 1"></div>
                                <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-offset="0"><?= $w["wawancara_nama"]?></h5>
                                <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600" data-aos-offset="0"><?= $w["wawancara_siapa_yang_diwawancara"]?></span>
                                <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600" data-aos-offset="0"><?= $w["wawancara_isi"]?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
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
<?php } ?>