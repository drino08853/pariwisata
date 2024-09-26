<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Contact US</h3>
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
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Edit Contact</h4>
                        </div>
                    </div>

                    <?php
                    $id_kontak = $_GET['id_kontak'];
                    $ubah = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id_kontak = '$id_kontak'");
                    $data = mysqli_fetch_array($ubah);
                    ?>

                    <div class="card-body">
                        <form action="contact/proses_update.php" method="POST">
                            <input type="hidden" name="id_kontak" class="form-control" value="<?php echo $data['id_kontak']; ?>">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><i class="fab fa-facebook-square"></i> Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" name="facebook" class="form-control" value="<?php echo $data['facebook']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><i class="fab fa-instagram"></i> Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" name="instagram" class="form-control" value="<?php echo $data['instagram']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><i class="fab fa-whatsapp"></i> No.Telp</label>
                                <div class="col-sm-9">
                                    <input type="number" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><i class="fas fa-map-signs"></i> Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="alamat" rows="5"><?php echo $data['alamat']; ?></textarea>
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