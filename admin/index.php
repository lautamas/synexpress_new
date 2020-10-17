<?php
session_start();
ob_start();

include '../koneksi/koneksi.php';
include '../koneksi/helper.php';
include '../model/get-fungsi.php';
include 'model/m_users.php';
include 'model/m_layanan.php';

?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'kepala.php' ?>
</head>

<body>
   <?php include 'header.php' ?>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2">
            <?php include 'menu.php' ?>
         </div>
         <div class="col-md-10 mt-3">
            <?php include 'content.php' ?>
         </div>
      </div>
   </div>


   <?php include 'kaki.php' ?>
</body>

</html>