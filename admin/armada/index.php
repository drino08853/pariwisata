<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Armada</h3>
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
                    <a href="#">Armada</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Add Armada</h4>
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
                                            <span class="fw-light"> Armada</span>
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
                                        <form action="armada/proses_tambah.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Jenis Armada</label>
                                                        <input
                                                            name="jenis_armada"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Jenis Armada" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Jurusan</label>
                                                        <input
                                                            name="jurusan"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Jurusan" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Foto</label>
                                                        <input
                                                            name="foto"
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
                        $ubah = mysqli_query($koneksi, "SELECT * FROM armada");
                        while ($u = mysqli_fetch_array($ubah)) {
                        ?>

                            <div
                                class="modal fade"
                                id="editRowModal<?= $u['id_armada']; ?>"
                                tabindex="-1"
                                role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Edit</span>
                                                <span class="fw-light">Armada</span>
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
                                            <form action="armada/proses_edit.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="id_armada" value=" <?= $u['id_armada']; ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Jenis Armada</label>
                                                            <input
                                                                name="jenis_armada"
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Jenis Armada"
                                                                value="<?= $u['jenis_armada']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Jurusan</label>
                                                            <input
                                                                name="jurusan"
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Password"
                                                                value="<?= $u['jurusan']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Foto</label>
                                                            <img src="assets/images/<?= $u['foto']; ?>" width="200px" height="200px" alt="Image Not Found">
                                                            <input
                                                                name="foto_lama"
                                                                type="hidden"
                                                                class="form-control"
                                                                value="<?= $u['foto']; ?>" />
                                                            <input
                                                                name="foto"
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
                                        <th>Foto</th>
                                        <th>Jenis Armada</th>
                                        <th>Jurusan</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM armada ;");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="assets/images/<?= $d['foto']; ?>" width="110px" height="90px" alt="Image Not Found"></td>
                                            <td><?= $d['jenis_armada']; ?></td>
                                            <td><?= $d['jurusan']; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a
                                                        type="button"
                                                        title="Edit"
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editRowModal<?= $d['id_armada']; ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a
                                                        type="button"
                                                        data-bs-toggle="tooltip"
                                                        title="Hapus"
                                                        class="btn btn-link btn-danger btn-lg"
                                                        data-original-title="Remove"
                                                        href="armada/proses_hapus.php?id_armada=<?= $d['id_armada']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');">
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