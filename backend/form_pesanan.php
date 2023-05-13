<?php
require_once '../database/dbkoneksi.php';
include_once "../backend/template/head.php";
include_once "../backend/template/navbar.php"; 
?>

<div class="container">
    <h2 class="text-center">Tambah Pelanggan</h2>
    <form method="POST" action="proses_pesanan.php">
        <div class="form-group">
            <label for="id" class="form-label">Id</label>
            <input id="id" name="id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
            <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="motor_id" class="form-label">Motor Id</label>
            <input id="motor_id" name="motor_id" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity" class="form-label">Quantity</label>
            <input id="quantity" name="quantity" required type="text" class="form-control">
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>