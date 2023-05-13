<?php 
require_once '../database/dbkoneksi.php';
include_once "../backend/template/head.php";
include_once "../backend/template/navbar.php";
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="container">
    <h2 class="text-center">View Produk</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Id</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Nama Motor</td>
                <td><?=$row['nama_motor']?></td>
            </tr>
            <tr>
                <td>CC</td>
                <td><?=$row['cc']?></td>
            </tr>
            <tr>
                <td>Tipe Motor</td>
                <td><?=$row['tipe_motor_id']?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><?=$row['harga']?></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><?=$row['merk_id']?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?=$row['stok']?></td>
            </tr>
        </tbody>
    </table>
</div>