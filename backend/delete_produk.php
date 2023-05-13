<?php
require_once "../database/dbkoneksi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM motor WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header("location:index copy.php");
?>