<?php
session_start();
ob_start();

include 'koneksi/koneksi.php';
include 'koneksi/helper.php';
include 'model/get-fungsi.php';


?>

<!doctype html>
<html lang="en">

<head>
  <?php include 'kepala.php'; ?>
</head>

<body>
  <?php include 'header.php'; ?>
  <?php include 'content.php'; ?>
  <?php include 'footer.php'; ?>
  <?php include 'kaki.php'; ?>
</body>

</html>