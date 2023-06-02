<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col"></div>
        <div class="col-3">
            <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal" data-target="#tambahdatawawancara">
                Tambah Data
            </button>
        </div>
    </div>

    <!-- TAMBAH DATA LAYANAN -->
    <div class="modal fade" id="tambahdatawawancara" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Wawancara</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="wawancara_nama_tambah">Nama Narasumber : </label>
                        <input type="text" name="wawancara_nama_tambah" id="wawancara_nama_tambah" class="form-control" required><br>

                        <label for="wawancara_siapa_yang_diwawancara_tambah">Role : </label>
                        <input type="text" name="wawancara_siapa_yang_diwawancara_tambah" id="wawancara_siapa_yang_diwawancara_tambah" class="form-control" required><br>

                        <label for="komentar_tambah">Isi Wawancara : </label>
                        <textarea name="komentar_tambah" id="komentar_tambah" cols="30" rows="10" class="form-control" style="resize: none;" required></textarea><br>

                        <label for="layanan_tambah">Layanan : </label>
                        <select name="layanan_tambah" id="layanan_tambah" class="form-control" required>
                            <option value="">Pilih Layanan</option>
                            <?php foreach ($layanan as $lyn) : ?>
                                <option value="<?= $lyn["layanan_id"] ?>"><?= $lyn["layanan_nama"] ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="gambar_wawancara_tambah" class="btn btn-success my-3">Tambahkan Gambar</label>
                        <input type="file" name="gambar_wawancara_tambah" id="gambar_wawancara_tambah" style="display: none;" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="tambahbtnsubmitwawancara">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data <?= $title ?></h6>
        </div>
        <div class="card-body">
            <div class="col">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Narasumber</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Narasumber</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($wawancara as $wnc) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $wnc["wawancara_nama"] ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url('assets/main/assets/images/uploaded/wawancara/') . $wnc['wawancara_gambar'] ?>" alt="" width="200" height="100%">
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal" data-target="#infowawancara<?= $wnc["wawancara_id"] ?>">
                                                Info
                                            </button>
                                            <!-- INFORMASI LAYANAN -->
                                            <div class="modal fade" id="infowawancara<?= $wnc["wawancara_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Wawancara
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="wawancara_nama_tambah">Nama Narasumber : </label>
                                                            <input type="text" name="wawancara_nama_tambah" id="wawancara_nama_tambah" class="form-control" value="<?= $wnc['wawancara_nama'] ?>" disabled><br>

                                                            <label for="wawancara_siapa_yang_diwawancara_tambah">Role : </label>
                                                            <input type="text" name="wawancara_siapa_yang_diwawancara_tambah" id="wawancara_siapa_yang_diwawancara_tambah" class="form-control" value="<?= $wnc['wawancara_siapa_yang_diwawancara'] ?>" disabled><br>

                                                            <label for="komentar_tambah">Isi Wawancara : </label>
                                                            <textarea name="komentar_tambah" id="komentar_tambah" cols="30" rows="10" class="form-control" style="resize: none;" disabled><?= $wnc['wawancara_isi'] ?></textarea><br>

                                                            <label for="layanan_tambah">Layanan : </label>
                                                            <select name="layanan_tambah" id="layanan_tambah" class="form-control" disabled>
                                                                <option value="">Pilih Layanan</option>
                                                                <?php foreach ($layanan as $lyn) : ?>
                                                                    <option value="<?= $lyn["layanan_id"] ?>" <?= ($wnc['layanan_id'] == $lyn['layanan_id']) ? "selected" : ""; ?>><?= $lyn["layanan_nama"] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-warning mb-2 w-100" data-toggle="modal" data-target="#editdatalayanan<?= $wnc['wawancara_id'] ?>">
                                                Edit
                                            </button>

                                            <!-- EDIT DATA LAYANAN -->
                                            <div class="modal fade" id="editdatalayanan<?= $wnc['wawancara_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Layanan
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" name="wawancara_id_edit" value="<?= $wnc['wawancara_id'] ?>" id="wawancara_id">
                                                                <label for="wawancara_nama_edit">Nama Narasumber : </label>
                                                                <input type="text" name="wawancara_nama_edit" id="wawancara_nama_edit" class="form-control" value="<?= $wnc['wawancara_nama'] ?>" required><br>

                                                                <label for="wawancara_siapa_yang_diwawancara_edit">Role : </label>
                                                                <input type="text" name="wawancara_siapa_yang_diwawancara_edit" id="wawancara_siapa_yang_diwawancara_edit" class="form-control" value="<?= $wnc['wawancara_siapa_yang_diwawancara'] ?>" required><br>

                                                                <label for="komentar_edit">Isi Wawancara : </label>
                                                                <textarea name="komentar_edit" id="komentar_edit" cols="30" rows="10" class="form-control" style="resize: none;" required><?= $wnc['wawancara_isi'] ?></textarea><br>

                                                                <label for="layanan_edit">Layanan : </label>
                                                                <select name="layanan_edit" id="layanan_edit" class="form-control" required>
                                                                    <option value="">Pilih Layanan</option>
                                                                    <?php foreach ($layanan as $lyn) : ?>
                                                                        <option value="<?= $lyn["layanan_id"] ?>" <?= ($wnc['layanan_id'] == $lyn['layanan_id']) ? "selected" : ""; ?>><?= $lyn["layanan_nama"] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <input type="hidden" name="gambar_wawancara_edit_nama" value="<?= $wnc['wawancara_gambar'] ?>">
                                                                <label for="gambar_wawancara_edit" class="btn btn-success my-3">Tambahkan Gambar</label>
                                                                <input type="file" name="gambar_wawancara_edit" id="gambar_wawancara_edit" style="display: none;">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary" name="editbtnsubmitwawancara">Edit
                                                                    Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger mb-2 w-100" data-toggle="modal" data-target="#hapusdataWawancara<?= $wnc['layanan_id'] ?>">
                                                Hapus
                                            </button>

                                            <!-- HAPUS DATA Wawancara -->
                                            <div class="modal fade" id="hapusdataWawancara<?= $wnc['layanan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <form action="" method="POST">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Wawancara
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <input type="hidden" name="wawancara_id_hapus" value="<?= $wnc['wawancara_id'] ?>">
                                                                <input type="hidden" name="gambar_wawancara_hapus" value="<?= $wnc['wawancara_gambar'] ?>">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label>Apakah anda ingin menghapus data ini?</label>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-secondary" name="hapusbtnsubmitwawancara">Hapus
                                                                    Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="else" style="display: none;"></div>
</div>
<!-- JANGAN DIHAPUS -->
</div>
</div>