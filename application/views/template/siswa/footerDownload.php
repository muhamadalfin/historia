<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'theme/images/logohistoria.png'?>" class="img-fluid" alt="footer_logo">
                        </a>
                        <p><?php echo date('Y');?> © copyright by Developer Tim 4</a>. <br>All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="<?php echo site_url('siswa/home');?>">Home</a></li>
                        <li><a href="<?php echo site_url('siswa/contact');?>">Contact</a></li>
                        <li><a href="<?php echo site_url('siswa/profil');?>">Profil</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
              <div class="sitemap">
                  <h3>Akademik</h3>
                  <ul>
                      <li><a href="<?php echo site_url('siswa/token');?>">Soal</a></li>
                      <li><a href="<?php echo site_url('siswa/pengumuman');?>">Pengumuman</a></li>
                      <li><a href="<?php echo site_url('siswa/download');?>">Download</a></li>
                      <li><a href="<?php echo site_url('siswa/nilai');?>">Nilai</a></li>
                  </ul>
              </div>
            </div>
                    <div class="col-md-3">
                        <div class="address">
                            <h3>Hubungi Kami</h3>
                            <p><span>Alamat: </span> Malang, Jawa Timur, INA. 65141</p>
                            <p>Email : info@historia.com
                                <br> Phone : +62 82292902376</p>
                                <ul class="footer-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
            <script>
              $(document).ready(function() {
                $('#display').DataTable();
              });
            </script>
      </body>

</html>