<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>


    <div class="row">

        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Visi Perusahaan</h6>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <label for="visi">Visi Perusahaan</label><br>
                        <textarea class="form-control" name="visi" id="visi" rows="10" style="resize: none;"><?= $visi["0"]["tentang_visi"] ?></textarea>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnsubmitperusahaan">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-lg">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Misi Perusahaan</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-9"></div>
                            <div class="col">
                                <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal" data-target="#tambahmisi">
                                    Tambah Data
                                </button>
                                <div class="modal fade" id="tambahmisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <form action="" method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Misi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="isi_misi_tambah">Isi Misi : </label><br>
                                                    <textarea class="form-control" name="isi_misi_tambah" id="isi_misi_tambah" rows="10" style="resize: none;" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary" name="tambahbtnmisi">Tambah Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($about as $a) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $a["misi_deskripsi"] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning mb-2 w-100" data-toggle="modal" data-target="#ubahmisi<?= $a["misi_id"] ?>">
                                                    Edit
                                                </button>
                                                <div class="modal fade" id="ubahmisi<?= $a["misi_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <form action="" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Misi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" value="<?= $a["misi_id"] ?>" name="misi_id_ubah" id="misi_id_ubah">
                                                                    <label for="isi_misi_ubah">Isi Misi : </label><br>
                                                                    <textarea class="form-control" name="isi_misi_ubah" id="isi_misi_ubah" rows="10" style="resize: none;" required><?= $a["misi_deskripsi"] ?></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-warning" name="ubahbtnmisi">Edit Data</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-danger mb-2 w-100" data-toggle="modal" data-target="#hapusmisi<?= $a["misi_id"] ?>">
                                                    Hapus
                                                </button>
                                                <div class="modal fade" id="hapusmisi<?= $a["misi_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <form action="" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Misi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label for="">Apakah anda ingin menghapus data dibawah ini?</label><br>
                                                                    <input type="hidden" value="<?= $a["misi_id"] ?>" name="misi_id_hapus" id="misi_id_hapus">
                                                                    <label for="isi_misi_hapus">Isi Misi : </label><br>
                                                                    <textarea class="form-control" name="isi_misi_hapus" id="isi_misi_hapus" rows="10" style="resize: none;" disabled><?= $a["misi_deskripsi"] ?></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-danger" name="hapusbtnmisi">Hapus Data</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Jangan Dihapus -->
</div>
</div>