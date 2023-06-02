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
                        <h5 class="modal-title" id="exampleModalLongTitle">Projek Terlibat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- 

                        projek terlibat id
                        projek terlibat nama
                        projek terlibat deskripsi
                        projek terlibat layanan id
                        projek terlibat projek owner
                        projek terlibat tanggal
                        
                         -->
                        <label for="nama_projek_tambah">Nama Projek : </label>
                        <input type="text" name="nama_projek_tambah" id="nama_projek_tambah" class="form-control" required><br>

                        <label for="deskripsi_projek_tambah">Deskripsi Projek : </label>
                        <textarea name="deskripsi_projek_tambah" id="deskripsi_projek_tambah" cols="30" rows="10" class="form-control" style="resize: none;" required></textarea><br>

                        <label for="layanan_tambah">Layanan : </label>
                        <select name="layanan_tambah" id="layanan_tambah" class="form-control" required>
                            <option value="">Pilih Layanan</option>
                            <?php foreach ($layanan as $lyn) : ?>
                                <option value="<?= $lyn["layanan_id"] ?>"><?= $lyn["layanan_nama"] ?></option>
                            <?php endforeach; ?>
                        </select><br>

                        <label for="projek_owner_tambah">Projek Owner : </label>
                        <input type="text" name="projek_owner_tambah" id="projek_owner_tambah" class="form-control" required><br>

                        <label for="tanggal_pengerjaan_project_tambah">Pilih Tanggal</label>
                        <input type="date" name="tanggal_pengerjaan_project_tambah" id="tanggal_pengerjaan_project_tambah" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="tambahbtnsubmitprojekterlibat">Tambah
                            Data</button>
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
                            <th>Nama Projek</th>
                            <th>Layanan</th>
                            <th>Projek Owner</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Projek</th>
                            <th>Layanan</th>
                            <th>Projek Owner</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dataproject as $pt) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $pt["projek_terlibat_nama"] ?></td>
                                <td>
                                    <?= $pt["layanan_nama"] ?>
                                </td>
                                <td><?= $pt["projek_terlibat_projek_owner"] ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal" data-target="#infoprojekterlibat">
                                                Info
                                            </button>
                                            <!-- INFORMASI LAYANAN -->
                                            <div class="modal fade" id="infoprojekterlibat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Projek : <b><?= $pt["projek_terlibat_nama"] ?></b>
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="wawancara_nama_info">Nama Projek : </label>
                                                            <input type="text" name="wawancara_nama_info" id="wawancara_nama_info" class="form-control" value="<?= $pt["projek_terlibat_nama"] ?>" disabled><br>

                                                            <label for="wawancara_siapa_yang_diwawancara_info">Deskripsi Projek : </label>
                                                            <textarea name="komentar_info" id="komentar_info" cols="30" rows="10" class="form-control" style="resize: none;" disabled><?= $pt["projek_terlibat_deskripsi"] ?></textarea><br>

                                                            <label for="layanan_info">Layanan : </label>
                                                            <select name="layanan_info" id="layanan_info" class="form-control" disabled>
                                                                <option value="">Pilih Layanan</option>
                                                                <?php foreach ($layanan as $lyn) : ?>
                                                                    <option value="<?= $lyn["layanan_id"] ?>" <?= ($pt["projek_terlibat_layanan_id"] == $lyn["layanan_id"]) ? "selected" : ""; ?>><?= $lyn["layanan_nama"] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                            <label for="komentar_info">Projek Owner : </label>
                                                            <input type="text" name="wawancara_siapa_yang_diwawancara_info" id="wawancara_siapa_yang_diwawancara_info" class="form-control" value="<?= $pt["projek_terlibat_projek_owner"] ?>" disabled><br>

                                                            <label for="tanggal_pengerjaan_project_info">Pilih Tanggal</label>
                                                            <input type="date" name="tanggal_pengerjaan_project_info" id="tanggal_pengerjaan_project_info" class="form-control" value="<?= $pt["projek_terlibat_tanggal"] ?>" disabled>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-warning mb-2 w-100" data-toggle="modal" data-target="#editdataprojekterlibat">
                                                Edit
                                            </button>

                                            <!-- EDIT DATA LAYANAN -->
                                            <div class="modal fade" id="editdataprojekterlibat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                <input type="hidden" name="projek_terlibat_id" value="<?= $pt["projek_terlibat_id"] ?>" id="projek_terlibat_id">
                                                                <label for="nama_projek_edit">Nama Projek : </label>
                                                                <input type="text" name="nama_projek_edit" id="nama_projek_edit" class="form-control" value="<?= $pt["projek_terlibat_nama"] ?>" required><br>

                                                                <label for="deskripsi_projek_edit">Deskripsi Projek : </label>
                                                                <textarea name="deskripsi_projek_edit" id="deskripsi_projek_edit" cols="30" rows="10" class="form-control" style="resize: none;" required><?= $pt["projek_terlibat_deskripsi"] ?></textarea><br>

                                                                <label for="layanan_edit">Layanan : </label>
                                                                <select name="layanan_edit" id="layanan_edit" class="form-control" required>
                                                                    <option value="">Pilih Layanan</option>
                                                                    <?php foreach ($layanan as $lyn) : ?>
                                                                        <option value="<?= $lyn["layanan_id"] ?>" <?= ($pt["projek_terlibat_layanan_id"] == $lyn["layanan_id"]) ? "selected" : ""; ?>><?= $lyn["layanan_nama"] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                                <label for="projek_owner_edit">Projek Owner : </label>
                                                                <input type="text" name="projek_owner_edit" id="projek_owner_edit" class="form-control" value="<?= $pt["projek_terlibat_projek_owner"] ?>" required><br>

                                                                <label for="tanggal_pengerjaan_project_edit">Pilih Tanggal</label>
                                                                <input type="date" name="tanggal_pengerjaan_project_edit" id="tanggal_pengerjaan_project_edit" class="form-control" value="<?= $pt["projek_terlibat_tanggal"] ?>" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary" name="editbtnsubmitprojekterlibat">Edit
                                                                    Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger mb-2 w-100" data-toggle="modal" data-target="#hapusdataprojekterlibat<?= $pt["projek_terlibat_id"] ?>">
                                                Hapus
                                            </button>

                                            <!-- HAPUS DATA Wawancara -->
                                            <div class="modal fade" id="hapusdataprojekterlibat<?= $pt["projek_terlibat_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <form action="" method="POST">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Projek Terlibat
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <input type="hidden" name="projek_terlibat_id_hapus" value="<?= $pt["projek_terlibat_id"] ?>">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label>Apakah anda ingin menghapus data ini?</label>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-secondary" name="hapusbtnsubmitprojekterlibat">Hapus
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