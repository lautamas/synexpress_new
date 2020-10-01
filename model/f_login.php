<?php

function cekLogin($user, $pass)
{
   global $koneksi;
   $sql       = "SELECT * FROM users WHERE username = '$user'";
   $query     = mysqli_query($koneksi, $sql);
   $cekData   = mysqli_num_rows($query);
   $dataUsers = mysqli_fetch_assoc($query);

   if ($cekData > 0) {
      if ($dataUsers['password'] == $pass) {
         if ($dataUsers['status'] == 'Y') {
            return 'ok';
         } else {
            return 'akunNonAktif';
         }
      } else {
         return 'salahPassword';
      }
   } else {
      return 'salahUsername';
   }
}
