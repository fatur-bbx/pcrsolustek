<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col"></div>
        <div class="col-3">
            <form action="" method="POST" enctype="multipart/form-data">
                <label class="btn btn-primary mb-2 w-100" for="files">
                    Tambah Gambar
                </label>
                <input type="file" name="files[]" id="files" style="display: none;" onchange="tambahgambarlayanan()" multiple>
                <button type="submit" name="btnAddImageLayanan" style="display: none;" id="btnAddImageLayanan">Submit</button>
            </form>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data <?= $title ?></h6>
        </div>
        <div class="card-body">
            <div class="col">
                <?php if ($this->session->flashdata('berhasil')) { ?>
                    <div class="alert alert-success" role="alert" id="berhasil">
                        <?= $this->session->flashdata('berhasil') ?>
                    </div>
                <?php } else if ($this->session->flashdata('gagal')) { ?>
                    <div class="alert alert-danger" role="alert" id="gagal">
                        <?= $this->session->flashdata('gagal') ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ($image) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Gambar</th>
                                <th>Nama Layanan</th>
                                <th>Preview</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Gambar</th>
                                <th>Nama Layanan</th>
                                <th>Preview</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($image as $img) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $img['gambar_layanan_nama_file'] ?></td>
                                    <td><?= $img['layanan_nama'] ?></td>
                                    <td><img src="<?= base_url('assets/main/assets/images/uploaded/layanan/') . $img['gambar_layanan_nama_file'] ?>" alt="" width="200" height="100%"></td>
                                    <td>
                                        <div class="row">
                                            <?php if($img['isSampul']!='1') : ?>
                                            <div class="col">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="makeitsampulid" value="<?= $img['gambar_layanan_id'] ?>">
                                                    <input type="hidden" name="makeitsampulgambar_layanan_layanan_id" value="<?= $img['gambar_layanan_layanan_id'] ?>">
                                                    <button type="submit" class="btn btn-primary mb-2 w-100" name="makeitsampul">Jadikan sampul</button>
                                                </form>
                                            </div>
                                            <?php endif;?>
                                            <div class="col">
                                                <button type="button" class="btn btn-danger mb-2 w-100" data-toggle="modal" data-target="#hapusdatagambarlayanan<?= $img["gambar_layanan_id"] ?>">
                                                    Hapus
                                                </button>
                                            </div>

                                            <!-- HAPUS DATA GAMBAR LAYANAN -->
                                            <div class="modal fade" id="hapusdatagambarlayanan<?= $img["gambar_layanan_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <form action="" method="POST">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Gambar Layanan
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <input type="hidden" name="gambar_layanan_id" value="<?= $img['gambar_layanan_id'] ?>">
                                                                <input type="hidden" name="gambar_layanan_nama_file" value="<?= $img['gambar_layanan_nama_file'] ?>">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label>Apakah anda ingin menghapus gambar tersebut ?</label>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-secondary" name="hapusbtnsubmitgambarlayanan">Hapus
                                                                    Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                DATA MASIH KOSONG, TAMBAH GAMBAR LAYANAN DENGAN TOMBOL DISEBELAH KANAN ATAS
            <?php } ?>
        </div>
    </div>
    <div id="else" style="display: none;"></div>
</div>
<!-- JANGAN DIHAPUS -->
</div>
</div>
<script>
    function tambahgambarlayanan() {
        document.getElementById('btnAddImageLayanan').click();
    }
    var success = document.getElementById('else')
    <?php if ($this->session->flashdata('berhasil')) { ?>
        success = document.getElementById("berhasil");
    <?php } else if ($this->session->flashdata('gagal')) { ?>
        success = document.getElementById("gagal");
    <?php } ?>
    setInterval(() => {
        success.style.display = "none";
    }, 2000);
</script>