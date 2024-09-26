<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Wisata</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Wisata</a>
                </li>
            </ul>
        </div>
        <div class="page-header">
            <h5 class="fw-bold mb-3">Data Wisata Per-Tanggal</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Wisata</h4>
                        </div>

                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" required value="<?= isset($_POST['tgl_mulai']) ? $_POST['tgl_mulai'] : '' ?>" size="10" required />
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="date" name="tgl_sampai" id="tgl_sampai" class="form-control" required value="<?= isset($_POST['tgl_sampai']) ? $_POST['tgl_sampai'] : '' ?>" size="10" required />
                                    </div>

                                    <div class="col-lg-3">
                                        <button class="btn btn-outline-success" type="submit" name="filter"><i class="fas fa-search"></i></button>
                                        <button class="btn btn-outline-info" onclick="openPrintWindow()"><i class="fas fa-print"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <script>
                            function openPrintWindow() {
                                var tglMulai = document.getElementById('tgl_mulai').value;
                                var tglSampai = document.getElementById('tgl_sampai').value;
                                var url = 'laporan/print.php?mulai=' + tglMulai + '&sampai=' + tglSampai;
                                window.open(url, '_blank');
                            }
                        </script>

                        <div class="table-responsive">
                            <table
                                id="add-row"
                                class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar Wisata</th>
                                        <th>Tempat Wisata</th>
                                        <th>Kategori</th>
                                        <th>Tgl Publish</th>
                                        <th>Tentang Wisata</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 1;

                                    //Proses Filter berdasarka tanggal
                                    if (isset($_POST['filter'])) {
                                        $tgl_mulai = $_POST['tgl_mulai'];
                                        $tgl_sampai = $_POST['tgl_sampai'];

                                        //validasi input tanggal
                                        if (!empty($tgl_mulai) && !empty($tgl_sampai) && $tgl_mulai <=  $tgl_sampai) {
                                            $kategori = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori 
                                    ON wisata.id_kategori=kategori.id_kategori WHERE tgl_publish 
                                    BETWEEN '$tgl_mulai' AND '$tgl_sampai' ORDER BY id_wisata DESC");
                                        } else {
                                            echo "<script>alert('Masukkan Rentang Tanggal Yang Valid !');</script>";
                                        }
                                    } else {
                                        // Menampilkan semua data jika filter tidak digunakan 
                                        $kategori = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori 
                                    ON wisata.id_kategori=kategori.id_kategori");
                                    }

                                    while ($d = mysqli_fetch_array($kategori)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="assets/images/<?= $d['gambar_wisata']; ?>" width="100px" height="100px" alt="Image Not Found"></td>
                                            <td><?= $d['tempat_wisata']; ?></td>
                                            <td><?= $d['nama_kategori']; ?></td>
                                            <td><?= $d['tgl_publish']; ?></td>
                                            <td><?= substr($d['tentang_wisata'], 0, 30) ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>