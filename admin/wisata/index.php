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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Add Wisata</h4>
                            <button
                                class="btn btn-primary btn-round ms-auto"
                                data-bs-toggle="modal"
                                data-bs-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </button>
                        </div>
                    </div>


                    <div class="card-body">
                        <!-- Modal Tambah  -->

                        <div
                            class="modal fade"
                            id="addRowModal"
                            tabindex="-1"
                            role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">Tambah</span>
                                            <span class="fw-light"> Wisata</span>
                                        </h5>
                                        <button
                                            type="button"
                                            class="close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="wisata/proses_tambah.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Tempat Wisata</label>
                                                        <input
                                                            name="tempat_wisata"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Tempat Wisata" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Kategori</label>
                                                        <select class="select2-single-placeholder form-control" name="id_kategori">
                                                            <option value="">==Silahkan Pilih===</option>
                                                            <?php
                                                            $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                            while ($d = mysqli_fetch_array($data)) {
                                                            ?>
                                                                <option value="<?php echo $d['id_kategori']; ?>"><?php echo $d['nama_kategori']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Tanggal Publish</label>
                                                        <input
                                                            name="tgl_publish"
                                                            type="date"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Tentang Wisata</label>
                                                        <textarea class="form-control" name="tentang_wisata" rows="7"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Gambar Wisata</label>
                                                        <input
                                                            name="gambar_wisata"
                                                            type="file"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button
                                            type="submit"
                                            class="btn btn-primary">
                                            Simpan
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>


                        <!-- Modal Edit  -->

                        <?php
                        // $id_kategori = $_GET['id_kategori'];
                        $ubah = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori 
    ON wisata.id_kategori=kategori.id_kategori");
                        while ($u = mysqli_fetch_array($ubah)) {
                        ?>

                            <div
                                class="modal fade"
                                id="editRowModal<?= $u['id_wisata']; ?>"
                                tabindex="-1"
                                role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Edit</span>
                                                <span class="fw-light">Wisata</span>
                                            </h5>
                                            <button
                                                type="button"
                                                class="close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="wisata/proses_edit.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="id_wisata" class="form-control" value="<?= $u['id_wisata']; ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tempat Wisata</label>
                                                            <input
                                                                name="tempat_wisata"
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Tempat Wisata" value="<?= $u['tempat_wisata']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Kategori</label>
                                                            <select class="select2-single-placeholder form-control" name="id_kategori">
                                                                <option value="">==Silahkan Pilih===</option>
                                                                <?php
                                                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                                while ($k = mysqli_fetch_array($kategori)) {
                                                                ?>
                                                                    <option value="<?php echo $k['id_kategori'] ?>" <?php echo $k['id_kategori'] == $u['id_kategori'] ? 'selected'  : '' ?>>
                                                                        <?php echo $k['nama_kategori'] ?>
                                                                    </option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tanggal Publish</label>
                                                            <input
                                                                name="tgl_publish"
                                                                type="date"
                                                                class="form-control"
                                                                value="<?= $u['tgl_publish']; ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tentang Wisata</label>
                                                            <textarea class="form-control" name="tentang_wisata" rows="7"><?= $u['tentang_wisata']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Gambar Wisata</label>
                                                            <img src="assets/images/<?= $u['gambar_wisata']; ?>" width="200px" height="200px" alt="Image Not Found">
                                                            <input
                                                                name="foto_lama"
                                                                type="hidden"
                                                                class="form-control"
                                                                value="<?= $u['gambar_wisata']; ?>" />
                                                            <input
                                                                name="gambar_wisata"
                                                                type="file"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button
                                                type="submit"
                                                class="btn btn-primary">
                                                Update
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-danger"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>



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
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM wisata JOIN kategori 
                ON wisata.id_kategori=kategori.id_kategori ORDER BY id_wisata DESC");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="assets/images/<?= $d['gambar_wisata']; ?>" width="100px" height="100px" alt="Image Not Found"></td>
                                            <td><?= $d['tempat_wisata']; ?></td>
                                            <td><?= $d['nama_kategori']; ?></td>
                                            <td><?= $d['tgl_publish']; ?></td>
                                            <td><?= substr($d['tentang_wisata'], 0, 30) ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a
                                                        type="button"
                                                        title="Edit"
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editRowModal<?= $d['id_wisata']; ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a
                                                        type="button"
                                                        data-bs-toggle="tooltip"
                                                        title="Hapus"
                                                        class="btn btn-link btn-danger btn-lg"
                                                        data-original-title="Remove"
                                                        href="wisata/proses_hapus.php?id_wisata=<?= $d['id_wisata']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
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