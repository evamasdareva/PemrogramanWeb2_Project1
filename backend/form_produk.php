<?php 
require_once '../database/dbkoneksi.php';
include_once "../backend/template/head.php";
include_once "../backend/template/navbar.php";
?>
            
            <div class="container">
    <h2 class="text-center">Form Produk</h2>
    <form method="POST" action="proses_produk.php">
        <div class="form-group">
            <label for="id" class="form-label">Id</label>
            <input id="id" name="id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_motor" class="form-label">Nama Motor</label>
            <input id="nama_motor" name="nama_motor" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cc" class="form-label">CC</label>
            <input id="cc" name="cc" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipe_motor_id" class="form-label">Tipe Motor</label>
            <?php 
            $sqljenis = "SELECT * FROM tipe_motor";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="tipe_motor_id" name="tipe_motor_id" class="form-control">
                <?php 
            foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['id']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input id="harga" name="harga" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="merk_id" class="form-label">Merk</label>
            <?php 
            $sqljenis = "SELECT * FROM merk";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="merk_id" name="merk_id" class="form-control">
                <?php 
            foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['id']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input id="stok" name="stok" required type="text" class="form-control">
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>