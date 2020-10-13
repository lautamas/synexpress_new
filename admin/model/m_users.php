<?php

function getUsers()
{
   global $koneksi;
   $x = [];
   $sql   = "SELECT * FROM `users` inner join profil on users.id_user = profil.id_user";
   $query = mysqli_query($koneksi, $sql);
   while ($data  = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }

   return $x;
}

function getUsersByIdA($id)
{
   global $koneksi;
   $sql   = "SELECT * FROM `users` inner join profil on users.id_user = profil.id_user WHERE users.id_user = '$id'";
   $query = mysqli_query($koneksi, $sql);
   $data  = mysqli_fetch_assoc($query);

   return $data;
}


function insertUsers($data)
{
   global $koneksi;
   $sql = "INSERT INTO `users`(`username`, `email`, `password`, `level`, `status`, `created_at`) VALUES ('$data[username]','$data[email]', '$data[password]', '$data[level]', '$data[status]', '$data[createdAt]')";
   $insertUsers = mysqli_query($koneksi, $sql);

   $idUsers = mysqli_insert_id($koneksi);

   if ($insertUsers) {
      $sql2 = "INSERT INTO `profil`(`nama_depan`, `nama_belakang`, `id_user`) VALUES ('$data[namaDepan]', '$data[namaBelakang]', '$idUsers')";
      $insertProfil = mysqli_query($koneksi, $sql2);

      return $insertProfil;
   }
}


function updateUsers($data)
{
   global $koneksi;

   // Jika password==kosong then tidak mengubah password else mengubah password
   if ($_POST['password'] = "") {
      $sqlUsers = "UPDATE `users` SET `username`='$data[username]',`email`='$data[email]',`level`='$data[level]',`status`='$data[status]',`updated_at`='$data[updatedAt]' WHERE id_user='$data[idUser]'";
      $updateUsers = mysqli_query($koneksi, $sqlUsers);
   } else {
      $sqlUsers = "UPDATE `users` SET `username`='$data[username]',`email`='$data[email]',`password`='$data[password]',`level`='$data[level]',`status`='$data[status]',`updated_at`='$data[updatedAt]' WHERE id_user='$data[idUser]'";
      $updateUsers = mysqli_query($koneksi, $sqlUsers);

      if ($updateUsers) {
         $sqlProfil = "UPDATE `profil` SET `nama_depan`='$data[namaDepan]',`nama_belakang`='$data[namaBelakang]' WHERE `id_user`= '$data[idUser]'";

         $updateProfil = mysqli_query($koneksi, $sqlProfil);

         return $updateProfil;
      }
   }
}

function deleteUsers($id)
{
   global $koneksi;
   $sql = "DELETE FROM `users` WHERE id_user='$id'";
   $query = mysqli_query($koneksi, $sql);
   return $query;
}
