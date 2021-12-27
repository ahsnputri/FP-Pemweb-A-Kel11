
<!--================ Start footer Area  =================-->
<footer class="footer-area p_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Kami</h6>
                    <ul class="list">
                        <li><a href="<?= base_url('welcome/tentang') ?>">Tentang Parker Junior High School</a></li>
                        <li><a href="<?= base_url('welcome/kontak') ?>">Kontak Parker Junior High School</a></li>
                    </br>
                        <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/parker22.jpg" alt=""></a>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Developer</h6>
                    <ul class="list">
                        <li>Aplikasi ini dibuat oleh Mahasiswa Teknik Informatika, Fakultas Ilmu Komputer, UPN Veteran Jawa Timur </br>Ezra Wijaya </br>Rizqy Ahsana Putri </br>Ilham Ainur Idhana </br>Thomas Andrew </br>M. Arif Saifudin </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <h4 class="footer_title">Tentang Parker Junior High School</h4>
                <p>
                    Parker International Junior High School adalah sekolah menengah pertama yang menggunakan standar internasional dalam kegiatan belajar mengajar. Oleh sebab itu, siswa-siswi yang ada diharapkan memiliki kompetensi yang sama dengan siswa-siswi luar negeri, dan juga mampu bersaing secara internasional.
                </p>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<script src="<?= base_url('assets/') ?>js/stellar.js"></script>
<script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.counterup.js"></script>
<script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
<script src="<?= base_url('assets/') ?>js/theme.js"></script>
<script>
    var animateButton = function(e) {
        e.preventDefault;
        e.target.classList.remove('animate');
        e.target.classList.add('animate');
        setTimeout(function() {
            e.target.classList.remove('animate');
        }, 700);
    };

    var bubblyButtons = document.getElementsByClassName("bubbly-button");

    for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
    }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>