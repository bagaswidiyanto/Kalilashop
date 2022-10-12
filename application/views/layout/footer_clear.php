<!-- Footer -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-1" data-aos="fade-up" data-aos-duration="2000">
                <div class="footer-address">
                    <h3 class="font-yo">Lokasi</h3>
                    <?= $website->address; ?>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 pt-3">
                        <div class="open">
                            <h3 class="font-yo">Jam Buka</h3>
                            <p>Setiap Hari <?= $website->working_hours; ?> WIB</p>
                            <p>Kecuali Hari Jumat TUTUP</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 pt-3">
                        <div class="call-me">
                            <h3 class="font-yo">Telepon</h3>
                            <div class="pt-2">
                                <a class="btn-wa" href="https://wa.wizard.id/fe0403" target="_blank"><i class="fa fa-whatsapp"></i><?= $wa; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sosmed mt-4">
                    <?php foreach ($sosmed as $s) { ?>
                        <div class="sosmed-link">
                            <a href="<?= $s->link; ?>" target="_blank"><img class="img-fluid" src="assets/imagenew/fb.png" alt=""> <?= $s->name; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5 pt-5">
                <?= $website->map; ?>
            </div>
        </div>
    </div> <!-- end of container -->
</section> <!-- end of footer -->

<div class="copyright">
    <div class="container">
        <div class="row justify-content-center text-center mx-0">
            <div class="col-lg-3">
                <p>Copyright © 2022 - <a href="https://progimedia.com/">PROGIMEDIA</a> All Rights Reserved. Powered
                    by Digitalindo</p>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="<?= base_url(); ?>assets/imagenew/arrow-up.png" alt="alternative">
</button>
<!-- end of back to top button -->

<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <img src="assets/imagenew/bg-login.png" class="bgmodal img-fluid" alt="">
            <!-- <img class="img-fluid bgmodal" src="assets/imagenew/hero.png" alt=""> -->

            <!-- Modal Header -->
            <div class="modal-header">
                <!-- <h4 class="modal-title">Modal Heading</h4> -->
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-bg-blue">
                            <div class="modal-title text-center">
                                <h4 class="font-yo">Selamat Datang Kembali!</h4>
                                <p>Silahkan login disini</p>
                            </div>
                            <form id="login" method="POST">
                                <div class="container">
                                    <div class="form-group mt-4">
                                        <div class="icon d-flex align-items-center justify-content-center"><img class="img-fluid" src="assets/imagenew/unameIcon.png" alt=""></div>
                                        <input type="text" class="form-control input" id="username" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="icon d-flex align-items-center justify-content-center"><img class="img-fluid" src="assets/imagenew/passIcon.png" alt=""></div>
                                        <input type="password" class="form-control input" id="password" name="password" placeholder="Password">
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="form-control btn-login btn btn-primary" id="btnlog">Login</button>
                                    </div>

                                    <!-- <div class="form-group">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div> -->

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div> -->

        </div>
    </div>
</div>

<!-- End Modal -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Scripts -->
<script src="assets/js/bootstrap.min.js"></script><!-- Bootstrap framework -->
<script src="assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
<script src="assets/js/swiper.min.js"></script><!-- Swiper for image and text sliders -->

<script src="assets/js/script.js"></script> <!-- Custom scripts -->
</body>

</html>