<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col"></div>
        <div class="col-3">
            <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal"
                data-target="#tambahdatalayanan">
                Tambah Data
            </button>
        </div>
    </div>

    <!-- TAMBAH DATA LAYANAN -->
    <div class="modal fade" id="tambahdatalayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="layanan_nama_tambah">Nama Layanan : </label>
                        <input type="text" name="layanan_nama_tambah" id="layanan_nama_tambah" class="form-control"><br>
                        <label for="layanan_deskripsi_tambah">Deskripsi Layanan : </label>
                        <textarea name="layanan_deskripsi_tambah" id="layanan_deskripsi_tambah" cols="30" rows="10"
                            class="form-control" style="resize: none;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="tambahbtnsubmitlayanan">Tambah Data</button>
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
                <?php if($this->session->flashdata('berhasil')) { ?>
                <div class="alert alert-success" role="alert" id="berhasil">
                    <?= $this->session->flashdata('berhasil') ?>
                </div>
                <?php } else if($this->session->flashdata('gagal')) { ?>
                <div class="alert alert-danger" role="alert" id="gagal">
                    <?= $this->session->flashdata('gagal') ?>
                </div>
                <?php } ?>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Layanan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Layanan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach($layanan as $lyn) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lyn["layanan_nama"] ?></td>
                            <td class="text-center">
                                <form action="<?= base_url('index.php/secret/gambar_layanan/'.$lyn['layanan_id']) ?>">
                                    <button class="btn btn-success" name="tampilhalamangambarlayanan">Klik disini</button>
                                </form>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary mb-2 w-100" data-toggle="modal"
                                            data-target="#infolayanan<?= $lyn["layanan_id"] ?>">
                                            Info
                                        </button>
                                        <!-- INFORMASI LAYANAN -->
                                        <div class="modal fade" id="infolayanan<?= $lyn["layanan_id"] ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Layanan
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="layanan_nama">Nama Layanan : </label>
                                                        <input type="text" name="layanan_nama" id="layanan_nama"
                                                            class="form-control" value="<?= $lyn["layanan_nama"] ?>"
                                                            disabled><br>
                                                        <label for="layanan_deskripsi">Deskripsi Layanan : </label>
                                                        <textarea name="layanan_deskripsi" id="layanan_deskripsi"
                                                            cols="30" rows="10" class="form-control"
                                                            style="resize: none;"
                                                            disabled><?= $lyn["layanan_deskripsi"] ?></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"
                                                            id="editbtnsubmitlayanan">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-warning mb-2 w-100" data-toggle="modal"
                                            data-target="#editdatalayanan<?= $lyn["layanan_id"] ?>">
                                            Edit
                                        </button>

                                        <!-- EDIT DATA LAYANAN -->
                                        <div class="modal fade" id="editdatalayanan<?= $lyn["layanan_id"] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Layanan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="layanan_id_edit"
                                                                value="<?= $lyn["layanan_id"] ?>" id="layanan_id">
                                                            <label for="layanan_nama_edit">Nama Layanan : </label>
                                                            <input type="text" name="layanan_nama_edit"
                                                                id="layanan_nama_edit" class="form-control"
                                                                value="<?= $lyn["layanan_nama"] ?>"><br>
                                                            <label for="layanan_deskripsi_edit">Deskripsi Layanan :
                                                            </label>
                                                            <textarea name="layanan_deskripsi_edit"
                                                                id="layanan_deskripsi_edit" cols="30" rows="10"
                                                                class="form-control"
                                                                style="resize: none;"><?= $lyn["layanan_deskripsi"] ?></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name="editbtnsubmitlayanan">Edit
                                                                Data</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger mb-2 w-100" data-toggle="modal"
                                            data-target="#hapusdatalayanan<?= $lyn["layanan_id"] ?>">
                                            Hapus
                                        </button>

                                        <!-- HAPUS DATA LAYANAN -->
                                        <div class="modal fade" id="hapusdatalayanan<?= $lyn["layanan_id"] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Layanan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <input type="hidden" name="layanan_id_hapus"
                                                                value="<?= $lyn['layanan_id'] ?>">
                                                        </div>
                                                        <div class="modal-body">
                                                            <label>Apakah anda ingin menghapus
                                                                <b><?= $lyn["layanan_nama"] ?></b> ?</label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-secondary"
                                                                name="hapusbtnsubmitlayanan">Hapus
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
                        <?php $i++;?>
                        <?php endforeach;?>
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
<script>
var success = document.getElementById('else')
<?php if($this->session->flashdata('berhasil')){?>
success = document.getElementById("berhasil");
<?php } else if($this->session->flashdata('gagal')){ ?>
success = document.getElementById("gagal");
<?php }?>
setInterval(() => {
    success.style.display = "none";
}, 2000);
</script>