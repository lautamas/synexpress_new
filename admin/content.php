<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($halaman) {

   case 'dashboard':
      include 'view/dashboard.php';
      break;
   case 'users':
      include 'view/users.php';
      break;
   case 'add-users':
      include 'view/add-form/add-users.php';
      break;
   case 'edit-users':
      include 'view/edit-form/edit-users.php';
      break;
   case 'layanan':
      include 'view/layanan.php';
      break;
   case 'add-layanan':
      include 'view/add-form/add-layanan.php';
      break;
   case 'edit-layanan':
      include 'view/edit-form/edit-layanan.php';
      break;


      //AKSI FORM
   case 'aksi-users':
      include 'modul/aksi-users.php';
      break;
   case 'aksi-layanan':
      include 'modul/aksi-layanan.php';
      break;
   default:
      echo "HALAMAN TIDAK DITEMUKAN";
      break;
}
