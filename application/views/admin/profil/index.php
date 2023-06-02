<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">

        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Profil Perusahaan</h6>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <label for="profil_nama_badan_usaha">Nama Badan Usaha</label><br>
                    <input class="form-control" type="text" name="profil_nama_badan_usaha" id="profil_nama_badan_usaha" value="<?= $about['profil_nama_badan_usaha'] ?>"><br>
                    
                    <label for="profil_status_badan_usaha">Status Badan Usaha</label><br>
                    <input class="form-control" type="text" name="profil_status_badan_usaha" id="profil_status_badan_usaha" value="<?= $about['profil_status_badan_usaha'] ?>"><br>
                    
                    <label for="profil_alamat_badan_usaha">Alamat Badan Usaha</label><br>
                    <input class="form-control" type="text" name="profil_alamat_badan_usaha" id="profil_alamat_badan_usaha" value="<?= $about['profil_alamat_badan_usaha'] ?>"><br>
                    
                    <label for="profil_akte_pendirian">Gambar Akte Pendirian (NOTE : Jika gambar tidak mau diubah, tidak usah diisi)</label><br>
                    <label for="profil_akte_pendirian" class="btn btn-primary" >Klik Disini untuk memilih Gambar</label><br>
                    <input type="hidden" name="profil_akte_pendirian_acuan" value="<?= $about['profil_akte_pendirian'] ?>">
                    <input class="form-control" type="file" name="profil_akte_pendirian" id="profil_akte_pendirian" value="<?= $about['profil_akte_pendirian'] ?>" style="display: none;" >
                    
                    <label for="profil_akte_perubahan">Gambar Akte Perubahan (NOTE : Jika gambar tidak mau diubah, tidak usah diisi)</label><br>
                    <label for="profil_akte_perubahan" class="btn btn-primary" >Klik Disini untuk memilih Gambar</label><br>
                    <input type="hidden" name="profil_akte_perubahan_acuan" value="<?= $about['profil_akte_perubahan'] ?>">
                    <input class="form-control" type="file" name="profil_akte_perubahan" id="profil_akte_perubahan" value="<?= $about['profil_akte_perubahan'] ?>" style="display: none;" >
                    
                    <label for="profil_nib">Gambar NIB (NOTE : Jika gambar tidak mau diubah, tidak usah diisi)</label><br>
                    <label for="profil_nib" class="btn btn-primary" >Klik Disini untuk memilih Gambar</label><br>
                    <input type="hidden" name="profil_nib_acuan" value="<?= $about['profil_nib'] ?>">
                    <input class="form-control" type="file" name="profil_nib" id="profil_nib" value="<?= $about['profil_nib'] ?>" style="display: none;" >
                    
                    <label for="profil_npwp">Gambar NPWP (NOTE : Jika gambar tidak mau diubah, tidak usah diisi)</label><br>
                    <label for="profil_npwp" class="btn btn-primary" >Klik Disini untuk memilih Gambar</label><br>
                    <input type="hidden" name="profil_npwp_acuan" value="<?= $about['profil_npwp'] ?>">
                    <input class="form-control" type="file" name="profil_npwp" id="profil_npwp" value="<?= $about['profil_npwp'] ?>" style="display: none;" >
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" name="btnsubmitprofil">Edit Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Jangan Dihapus -->
</div>
</div>