<!-- Navbar Start -->
<?php
include "layout/header.php";
?>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">About</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">About</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<?php
$detail = mysqli_query($koneksi, "SELECT * FROM about");
$d = mysqli_fetch_array($detail);
?>

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="assets/img/bukittingi.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">VISI</h1>
                    <p><?= $d['visi'] ?></p>
                    <h1 class="mb-3">MISI</h1>
                    <p><?= $d['misi'] ?></p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="admin/assets/images/<?= $d['gambar_about'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Footer Start -->
<?php
include "layout/footer.php";
?>
<!-- Footer End -->