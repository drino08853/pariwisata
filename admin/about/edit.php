<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">About</h3>
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
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Edit About</h4>
                        </div>
                    </div>

                    <?php
                    $id_about = $_GET['id_about'];
                    $ubah = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about = '$id_about'");
                    $data = mysqli_fetch_array($ubah);
                    ?>


                    <div class="card-body">
                        <form action="about/proses_update.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_about" class="form-control" value="<?php echo $data['id_about']; ?>">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Visi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="visi" class="form-control" value="<?php echo $data['visi']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Misi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="misi" class="form-control" value="<?php echo $data['misi']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gambar About</label>
                                <div class="col-sm-9">
                                    <img src="assets/images/<?php echo $data['gambar_about']; ?>" width="200px" height="200px" alt="Image Not Found">
                                    <input type="hidden" name="foto_lama" class="form-control" value="<?php echo $data['gambar_about']; ?>">
                                    <input type="file" name="gambar_about" class="form-control">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>