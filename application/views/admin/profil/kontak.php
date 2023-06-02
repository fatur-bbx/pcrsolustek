<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>


    <div class="row">

        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nomor HP</h6>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <label for="kontak_nomor_hp">Nomor HP ( Contoh : 6281234567890 )</label><br>
                        <input class="form-control" type="text" name="kontak_nomor_hp" id="kontak_nomor_hp" value="<?= $about["kontak_nomor_hp"] ?>" required>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnnomorhp">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nomor Whatsapp</h6>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <label for="kontak_whatsapp">Nomor Whatsapp ( Contoh : 6281234567890 )</label><br>
                        <input class="form-control" type="text" name="kontak_whatsapp" id="kontak_whatsapp" value="<?= $about["kontak_whatsapp"] ?>" required>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnnomorwa">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Alamat Email</h6>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <label for="kontak_email">Alamat Email ( Contoh : fatur@example.com )</label><br>
                        <input class="form-control" type="email" name="kontak_email" id="kontak_email" value="<?= $about["kontak_email"] ?>" required>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnemail">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Username Instagram</h6>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <label for="kontak_ig">Username Instagram ( Contoh : faturbbx_ ) <i>Tanpa @</i></label><br>
                        <input class="form-control" type="text" name="kontak_ig" id="kontak_ig" value="<?= $about["kontak_instagram"] ?>" required>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnig">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jangan Dihapus -->
</div>
</div>