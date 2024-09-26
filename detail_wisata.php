<!-- Navbar Start -->
<?php
include "layout/header.php";
?>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Detail Wisata</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Wisata</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<?php
$slug = $_GET['slug'];
$detail = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori=kategori.id_kategori WHERE slug='$slug'");
$d = mysqli_fetch_array($detail);
?>

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <img class="img-fluid" src="admin/assets/images/<?= $d['gambar_wisata'] ?>" class="img-fluid rounded-top w-300 " style="height: 250px;">
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="about-text bg-white p-4">
                    <h1 class="mb-3"><?= $d['tempat_wisata'] ?></h1>
                    <p><?= $d['tentang_wisata'] ?></p>
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