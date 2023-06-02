<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">

        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Tentang Perusahaan</h6>
                </div>
                <form action="" method="post">
                <div class="card-body">
                    <label for="tentang_singkat">Tentang Singkat dari Perusahaan</label><br>
                    <textarea class="form-control" name="tentang_singkat" id="tentang_singkat" rows="10" style="resize: none;" required><?= $about["tentang_singkat"] ?></textarea>

                    <label for="tentang_lengkap">Tentang dari Perusahaan Secara Lengkap</label><br>
                    <textarea class="form-control" name="tentang_lengkap" id="tentang_lengkap" rows="10" style="resize: none;" required><?= $about["tentang_deskripsi"] ?></textarea>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" name="btnsubmitperusahaan">Edit Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Jangan Dihapus -->
</div>
</div>