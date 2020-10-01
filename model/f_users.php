<?php
function getUsersByUsername($user)
{
   global $koneksi;

   $sql = "SELECT * FROM users WHERE username = '$user'";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}

function getUsersById($id)
{
   global $koneksi;

   $sql = "SELECT * FROM users WHERE id_user = '$id'";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}
