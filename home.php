<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="assets/img/pantai.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">TOURISME</h4>
                        <h1 class="display-3 text-white mb-md-4">Sunset Yang Sangat Indah</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/bali.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">TOURISME</h4>
                        <h1 class="display-3 text-white mb-md-4">Destinasi Wisata Indonesia Yang Indah</h1>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Packages Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">List</h6>
            <h1>Pariwisata</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">
            <?php
            include "admin/koneksi.php";
            //jika menu kategorinya sudah dipilih
            if (isset($_GET['nama_kategori'])) {
                $nama_kategori = $_GET['nama_kategori'];
                $wisata = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori=kategori.id_kategori WHERE nama_kategori='$nama_kategori' ORDER BY id_wisata DESC");
                //looping data dengan while
            } else {
                $wisata = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori=kategori.id_kategori  ORDER BY id_wisata DESC");
            }
            while ($w = mysqli_fetch_array($wisata)) {
            ?>
                <div class="package-item bg-white mb-2">
                    <img class="img-fluid" src="admin/assets/images/<?= $w['gambar_wisata'] ?>" class="img-fluid rounded-top w-300 " style="height: 250px;">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-list text-primary mr-2"></i><?= $w['nama_kategori'] ?></small>
                        </div>
                        <a class="h5 text-decoration-none" href="detailwisata-<?= $w['slug'] ?>"> <?= substr($w['tempat_wisata'], 0, 20) ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<!-- Packages End -->



<!-- Team Start -->
<div class="container-fluid py-5 ">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">LIST ARMADA</h6>
            <h1>ARMADA</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php
            include "admin/koneksi.php";
            $armada = mysqli_query($koneksi, "SELECT * FROM armada  ORDER BY id_armada DESC");
            //looping data dengan while
            while ($a = mysqli_fetch_array($armada)) {
            ?>
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height:170px;" src="admin/assets/images/<?= $a['foto'] ?>" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate"><?= $a['jenis_armada'] ?></h5>
                        <p class="m-0"><?= $a['jurusan'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Team</h6>
            <h1>Struktur Team</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php
            include "admin/koneksi.php";
            $team = mysqli_query($koneksi, "SELECT * FROM tim ORDER BY id_tim DESC");
            //looping data dengan while
            while ($t = mysqli_fetch_array($team)) {
            ?>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="admin/assets/images/<?= $t['foto'] ?>" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">
                        </p>
                        <h5 class="text-truncate"><?= $t['nama_tim'] ?></h5>
                        <span><?= $t['jabatan'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->