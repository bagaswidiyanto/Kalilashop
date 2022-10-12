<div class="produk-populer" id="produk">
    <div class="container">
        <div class="row">
            <div class="text-center w-lg-75 m-auto pb-4">
                <h2 class="py-2 font-yo">Produk Populer</h2>
            </div>
        </div>

        <!-- Card Slider -->
        <div class="slider-container">
            <div class="swiper-container produk-populer-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($populer as $p) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/populer/<?= $p->image; ?>" alt="testimonial">
                                <div class="p-2 text-black text-center">
                                    <h6><?= $p->nama; ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>


            </div>
        </div>


    </div> <!-- end of container -->
</div>


<!-- About -->
<section class="welcome-kalila d-flex align-items-center">
    <img class="img-fluid back-kalila" src="<?= base_url(); ?>assets/imagenew/Rectangle 31.jpg" alt="">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-7">
                <!-- <img class="img-fluid" src="<?= base_url(); ?>assets/imagenew/kalila-shop.png" alt="about" > -->
            </div>
            <div class="col-lg-5 py-4 py-sm-0 text-black">
                <h2>SELAMAT DATANG DI</h2>
                <h1 class="font-yo"><?= $website->name; ?></h1>
                <?= $website->description; ?>
            </div>
        </div>
    </div> <!-- end of container -->
</section> <!-- end of about -->


<div class="service d-flex align-items-center">
    <div class="container container-service">
        <div class="row">
            <div class="text-center py-5">
                <h2 class="font-yo">Mengapa harus disini?</h2>
            </div>
        </div>
        <div class="service-background">
            <img src="<?= base_url(); ?>assets/imagenew/people2.png" class="img-fluid" alt="">
        </div>
    </div>
</div>


<div class="set-hijab" id="set-hijab">
    <div class="container">
        <div class="row">
            <div class="text-center w-lg-75 m-auto pb-4">
                <h2 class="py-2">Set Hijab & Mukena</h2>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container set-hijab-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($set_hijab as $sh) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                                <div class="img-set">
                                                    <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/set_hijab/<?= $sh->image; ?>" alt="testimonial">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                                <div class="text-side">
                                                    <h3><?= $sh->nama; ?></h3>
                                                    <h4>Rp. <?= number_format($sh->price, 0, ',', '.'); ?></h4>
                                                    <div class="check pt-1">
                                                        <p><img src="<?= base_url(); ?>assets/imagenew/check.png" class="img-fluid" alt=""><?= $sh->desk1; ?></p>
                                                        <p><img src="<?= base_url(); ?>assets/imagenew/check.png" class="img-fluid" alt=""><?= $sh->desk2; ?></p>
                                                        <p><img src="<?= base_url(); ?>assets/imagenew/check.png" class="img-fluid" alt=""><?= $sh->desk3; ?></p>
                                                    </div>
                                                </div>
                                                <div class="btn-order pt-2">
                                                    <a href="https://wa.wizard.id/fe0403" target="_blank">Pesan Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="katalog d-flex align-items-center" id="katalog">
    <div class="container">
        <div class="row">
            <div class="text-center w-lg-75 m-auto pb-4">
                <h2 class="py-2 font-yo">Katalog</h2>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container katalog-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($katalog as $k) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/katalog/<?= $k->image; ?>" alt="testimonial">
                                        <div class="p-2 text-black">
                                            <div class="btn-more">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h6><?= $k->nama; ?></h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a href="https://wa.wizard.id/fe0403" target="_blank">More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>

                <div class="cek-katalog text-center pt-3">
                    <h3>Cek katalog lengkap disini</h3>
                    <div class=" pt-2">
                        <a href="https://wa.wizard.id/fe0403" target="_blank" class="btn-wa"><i class="fa fa-whatsapp"></i><?= $wa; ?></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="galeri-produk d-flex align-items-center" id="gallery">
    <div class="container">
        <div class="row">
            <div class="text-center w-lg-75 m-auto pb-4">
                <h2 class="py-2 font-yo">Gallery Produk</h2>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container galeri-produk1-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($g1 as $g1) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/gallery1/<?= $g1->image; ?>" alt="testimonial">
                                    </div>
                                </div>
                            <?php } ?>

                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>

            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container galeri-produk2-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($g2 as $g2) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/gallery2/<?= $g2->image; ?>" alt="testimonial">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>

            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container galeri-produk3-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($g3 as $g3) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="avatar img-fluid" src="https://admin103.kalilashop.com/upload/gallery3/<?= $g3->image; ?>" alt="testimonial">
                                    </div>
                                </div>
                            <?php } ?>

                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>