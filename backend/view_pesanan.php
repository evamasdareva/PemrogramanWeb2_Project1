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
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Nama Pelanggan</td><td><?=$row['nama_pelanggan']?></td></tr>
        <tr>   <td>Alamat Pelanggan</td><td><?=$row['alamat_pelanggan']?></td></tr>
        <tr>   <td>Motor Id</td><td><?=$row['motor_id']?></td></tr>
        <tr>   <td>Quantity</td><td><?=$row['quantity']?></td></tr>
    </tbody>
</table>