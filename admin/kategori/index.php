<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Kategori</h3>
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
                    <a href="#">Kategori</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Add Kategori</h4>
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
                                            <span class="fw-light"> Kategori</span>
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
                                        <form action="kategori/proses_tambah.php" method="POST">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Kategori</label>
                                                        <input
                                                            name="nama_kategori"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Nama Kategori" />
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
                        $ubah = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($u = mysqli_fetch_array($ubah)) {
                        ?>

                            <div
                                class="modal fade"
                                id="editRowModal<?= $u['id_kategori']; ?>"
                                tabindex="-1"
                                role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Edit</span>
                                                <span class="fw-light"> Kategori</span>
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
                                            <form action="kategori/proses_edit.php" method="POST">
                                                <input type="hidden" name="id_kategori" value="<?= $u['id_kategori']; ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Kategori</label>
                                                            <input
                                                                name="nama_kategori"
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Nama Kategori"
                                                                value="<?= $u['nama_kategori']; ?>" />
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
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d['nama_kategori']; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a
                                                        type="button"
                                                        title="Edit"
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editRowModal<?= $d['id_kategori']; ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a
                                                        type="button"
                                                        data-bs-toggle="tooltip"
                                                        title="Hapus"
                                                        class="btn btn-link btn-danger btn-lg"
                                                        data-original-title="Remove"
                                                        href="kategori/proses_hapus.php?id_kategori=<?= $d['id_kategori']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');">
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