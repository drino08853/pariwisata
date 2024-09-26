 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
     <div class="row pt-5">
         <div class="col-lg-3 col-md-6 mb-5">
             <a href="./" class="navbar-brand">
                 <h1 class="text-primary"><span class="text-white">VENTUR</span>TOURS</h1>
             </a>
             <p>Perjalanan Liburan Menuju Ujung Dunia</p>
             <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>

             <?php
                include "admin/koneksi.php";
                $ambil = mysqli_query($koneksi, "SELECT * FROM kontak ");
                $data = mysqli_fetch_array($ambil);
                ?>
             <div class="d-flex justify-content-start">
                 <a class="btn btn-outline-primary btn-square mr-2" href="<?php echo $data['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-outline-primary btn-square" href="<?php echo $data['instagram']; ?>"><i class="fab fa-instagram"></i></a>
             </div>
         </div>

         <div class="col-lg-3 col-md-6 mb-5">

         </div>

         <?php
            include "admin/koneksi.php";
            $ambil = mysqli_query($koneksi, "SELECT * FROM kontak ");
            $data = mysqli_fetch_array($ambil);
            ?>
         <div class="col-lg-3 col-md-6 mb-5">
             <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us :</h5>
             <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo $data['alamat']; ?></p>
             <p><i class="fa fa-phone-alt mr-2"></i><?php echo $data['no_telp']; ?></p>
         </div>
     </div>
 </div>
 </div>


 <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
     <div class="row">
         <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
             <p class="m-0 text-white-50">Copyright &copy; <a href="#">VENTURTOURS</a>. All Rights Reserved.</a>
             </p>
         </div>
     </div>
 </div>
 <!-- Footer End -->





 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script src="assets/lib/easing/easing.min.js"></script>
 <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
 <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Contact Javascript File -->
 <script src="assets/mail/jqBootstrapValidation.min.js"></script>
 <script src="assets/mail/contact.js"></script>

 <!-- Template Javascript -->
 <script src="assets/js/main.js"></script>

 <!--Whatsaap floating button -->
 <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
     <i class="fab fa-whatsapp my-float"></i>
 </a>
 </body>

 </html>