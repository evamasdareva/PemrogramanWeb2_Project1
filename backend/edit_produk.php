<?php
require_once "../database/dbkoneksi.php";
include_once "../backend/template/head.php";
include_once "../backend/template/navbar.php"; 
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>
<div class="content-wrapper">
    <section class="content">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="proses_produk.php">
                    <div class="form-group row">
                        <label for="id" class="col-4 col-form-label">Id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="id" name="id" type="text" class="form-control" value="<?= $row['id'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="nama_motor" name="nama_motor" type="text" class="form-control" value="<?= $row['nama_motor'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cc" class="col-4 col-form-label">CC</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="cc" name="cc" type="text" class="form-control" value="<?= $row['cc'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipe_motor_id" class="col-4 col-form-label">Tipe Motor</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="tipe_motor_id" name="tipe_motor_id" type="text" class="form-control" value="<?= $row['tipe_motor_id'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-4 col-form-label">Harga</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="harga" name="harga" type="text" class="form-control" value="<?= $row['harga'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk_id" class="col-4 col-form-label">Merk</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="merk_id" name="merk_id" type="text" class="form-control" value="<?= $row['merk_id'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="stok" name="stok" type="text" class="form-control" value="<?= $row['stok'] ?>">
                            </div>
                        </div>
                    </div>
                <br>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                    <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
</div>