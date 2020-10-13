<?php

if (isset($_POST['save-users'])) {

   $ambilUsername = explode("@", $_POST['email']);
   $username = $ambilUsername[0];

   $data = [
      "email"        => $_POST['email'],
      "username"     => $username,
      "password"     => $_POST['password'],
      "namaDepan"    => $_POST['namaDepan'],
      "namaBelakang" => $_POST['namaBelakang'],
      "status"       => $_POST['status'] == 'on' ? 'Y' : 'N',
      "level"        => $_POST['level'],
      "createdAt"    => date("Y-m-d H:i:s"),

   ];
   $insertData = insertUsers($data);

   if ($insertData) {
      notif('Berhasil Menambahkan data Users', 'success');
      header("Location: ?page=users");
   }
}


if (isset($_POST['update-users'])) {
   $ambilUsername = explode("@", $_POST['email']);
   $username = $ambilUsername[0];

   $data = [
      "idUser"       => $_POST['idUser'],
      "email"        => $_POST['email'],
      "username"     => $username,
      "password"     => $_POST['password'],
      "namaDepan"    => $_POST['namaDepan'],
      "namaBelakang" => $_POST['namaBelakang'],
      "status"       => $_POST['status'] == 'on' ? 'Y' : 'N',
      "level"        => $_POST['level'],
      "updatedAt"    => date("Y-m-d H:i:s"),

   ];

   $updateData = updateUsers($data);
   if ($updateData) {
      notif("Berhasil Mengubah data Users", 'success');
      header("Location: ?page=users");
   }
}


if (isset($_GET['delete'])) {
   if ($_GET['delete'] == 'one') {
      $idUser = $_GET['id'];

      $delete = deleteUsers($idUser);

      if ($delete) {
         notif("Berhasil menghapus data Users", 'success');
         header("Location: ?page=users");
      }
   }
}
