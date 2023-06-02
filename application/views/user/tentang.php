<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-11">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="slide-content d-flex
                                    align-items-center">
                            <div class="single-slide">
                                <h1 data-aos="fade-right" data-aos-delay="200"><?= ($link == "Perusahaan") ? "Tentang" : (($link == "Visi%20Misi") ? "Visi Misi" : "Profil"); ?><br>PT. PCR Solustek
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
<?php if ($link == "Perusahaan") { ?>
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center
                    justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>PT. PCR Solustek</h2>
                    <p><?= $tentang[0]["tentang_singkat"] ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="penjelasan">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">PT. PCR Solustek</h1>
                <p><?= $tentang[0]["tentang_deskripsi"] ?></p>
            </div>
        </div>
    </section>
    <br><br><br>
<?php }
if ($link == "Visi%20Misi") { ?>
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">VISI</h1>
                <p><?= $tentang[0]["tentang_visi"] ?></p>
            </div>
        </div>
    </section>
    <section class="recent-posts">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">MISI</h1>
            </div>
            <div class="row">
                <?php $i=1?>
                <?php foreach($misi as $ms) : ?>
                <?php if($i%2==1) { ?>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="#"><?= $ms["misi_deskripsi"] ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-content">
                            <h3><a href=""><?= $ms["misi_deskripsi"] ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $i++;?>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php }
if ($link == "Profil") { ?>
    <section class="recent-posts">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Profil</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="#">Nama Badan Usaha : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-content">
                            <h3><a href=""><?= $profil[0]["profil_nama_badan_usaha"]?></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Status Badan Usaha : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                            <h3><a href=""><?= $profil[0]["profil_status_badan_usaha"]?></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Alamat Badan Usaha : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                            <h3><a href=""><?= $profil[0]["profil_alamat_badan_usaha"]?></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Email : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                            <h3><a href="">pcr.solusiteknologi@pcr.ac.id</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Akte Pendirian Pengesahan KEMENKUMHAM : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                            <h3>
                            <button onclick="aktependirianpengesahankemenkumham()" id="btnaktependirianpengesahankemenkumham">Tekan untuk melihat</button><br><br>
                            <img id="aktependirianpengesahankemenkumham" src="<?= base_url() ?>assets/main/assets/images/uploaded/profil/<?= $profil[0]["profil_akte_pendirian"]?>" alt="Akte Pendirian Pengesahan KEMENKUMHAM" style="border-radius: 10px;width: 200; height: 200; display: none;">
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Akte Perubahan Pengesahan KEMENKUMHAM : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                        <h3>
                            <button onclick="akteperubahanpengesahankemenkumham()" id="btnakteperubahanpengesahankemenkumham">Tekan untuk melihat</button><br><br>
                            <img id="akteperubahanpengesahankemenkumham" src="<?= base_url() ?>assets/main/assets/images/uploaded/profil/<?= $profil[0]["profil_akte_perubahan"]?>" alt="Akte Perubahan Pengesahan KEMENKUMHAM" style="border-radius: 10px;width: 200; height: 200; display: none;">
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">Nomor NIB : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                        <h3>
                            <button onclick="nomornib()" id="btnnomornib">Tekan untuk melihat</button><br><br>
                            <img id="nomornib" src="<?= base_url() ?>assets/main/assets/images/uploaded/profil/<?= $profil[0]["profil_nib"]?>" alt="NIB" style="border-radius: 10px;width: 200; height: 200; display: none;">
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="">NPWP : </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                        <div class="post-content">
                        <h3>
                            <button onclick="enpewepe()" id="btnenpewepe">Tekan untuk melihat</button><br><br>
                            <img id="enpewepe" src="<?= base_url() ?>assets/main/assets/images/uploaded/profil/<?= $profil[0]["profil_npwp"]?>" alt="NPWP" style="border-radius: 10px;width: 200; height: 200; display: none;">
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<script>
    
    function aktependirianpengesahankemenkumham(){
        let aktependirianpengesahankemenkumham = document.getElementById("aktependirianpengesahankemenkumham")
        if(aktependirianpengesahankemenkumham.style.display == "none"){
            aktependirianpengesahankemenkumham.style.display = "block"
            btnaktependirianpengesahankemenkumham.innerHTML = "Tekan untuk sembunyikan"
        }else{
            aktependirianpengesahankemenkumham.style.display = "none"
            btnaktependirianpengesahankemenkumham.innerHTML = "Tekan untuk melihat"
        }
    }

    function akteperubahanpengesahankemenkumham(){
        let akteperubahanpengesahankemenkumham = document.getElementById("akteperubahanpengesahankemenkumham")
        if(akteperubahanpengesahankemenkumham.style.display == "none"){
            akteperubahanpengesahankemenkumham.style.display = "block"
            btnakteperubahanpengesahankemenkumham.innerHTML = "Tekan untuk sembunyikan"
        }else{
            akteperubahanpengesahankemenkumham.style.display = "none"
            btnakteperubahanpengesahankemenkumham.innerHTML = "Tekan untuk melihat"
        }
    }

    function nomornib(){
        let nomornib = document.getElementById("nomornib")
        if(nomornib.style.display == "none"){
            nomornib.style.display = "block"
            btnnomornib.innerHTML = "Tekan untuk sembunyikan"
        }else{
            nomornib.style.display = "none"
            btnnomornib.innerHTML = "Tekan untuk melihat"
        }
    }

    function enpewepe(){
        let enpewepe = document.getElementById("enpewepe")
        if(enpewepe.style.display == "none"){
            enpewepe.style.display = "block"
            btnenpewepe.innerHTML = "Tekan untuk sembunyikan"
        }else{
            enpewepe.style.display = "none"
            btnenpewepe.innerHTML = "Tekan untuk melihat"
        }
    }
</script>