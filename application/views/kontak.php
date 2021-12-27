================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Kontak</h2>
                <div data-aos="fade-up" data-aos-duration="1600" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="<?= base_url('welcome/kontak') ?>">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_40">
    <div class="container">
        <div style="width: 100%">
            <iframe width="100%" height="600"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7540335622543!2d112.74178511433026!3d-7.2688070947533046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdf47fb2acb%3A0x9220df83241b6a0d!2sJl.%20Panglima%20Sudirman%2C%20Embong%20Kaliasin%2C%20Kec.%20Genteng%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060271!5e0!3m2!1sid!2sid!4v1638968724685!5m2!1sid!2sid" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen="" ></iframe>

</div><br />
        <div class="row">
            <div class="col-lg-9">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Jl. Panglima Sudirman no.45, Surabaya</h6>
                        <p>Alamat sekolah</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">
                                082140754132</a></h6>
                        <p>Nomor yang dapat dihubungi</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">parkeritschool@gmail.com</a></h6>
                        <p>Email administrator sekolah</p>
                    </br>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
  <!-- content page -->
  <div class="container contact-form">
            <div class="contact-image">
            </div>
            <form required action="<?= base_url('Feedback/kirimFeedback');?>" method="post">
                <h3>Kirim Feedback</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="bubbly-button" >
                            Send Message
                        </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="isi_feedback" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>