<div class="container">
    <div class="page-inner">
        <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
            </div>
        </div>

        <div class="row">

            <?php
            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM kategori");
            $data = mysqli_fetch_array($count);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-list"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Kategori</p>
                                    <h4 class="card-title"><?php echo $data['totdata']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM wisata JOIN kategori 
                ON wisata.id_kategori=kategori.id_kategori ORDER BY id_wisata DESC");
            $data = mysqli_fetch_array($count);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-monument"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Wisata</p>
                                    <h4 class="card-title"><?php echo $data['totdata']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM armada");
            $data = mysqli_fetch_array($count);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-car"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Armada</p>
                                    <h4 class="card-title"><?php echo $data['totdata']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM tim");
            $data = mysqli_fetch_array($count);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Team</p>
                                    <h4 class="card-title"><?php echo $data['totdata']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <?php
            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM user");
            $data = mysqli_fetch_array($count);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">User</p>
                                    <h4 class="card-title"><?php echo $data['totdata']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>