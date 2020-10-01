<?php
include 'f_login.php';
include 'f_users.php';


if (!empty($_COOKIE['IDUSER'])) {
   $dataUsers = getUsersById($_COOKIE['IDUSER']);

   //BUAT SESSION
   $_SESSION['IdUser']     = $dataUsers['id_user'];
   $_SESSION['Username']   = $dataUsers['username'];
   $_SESSION['Level']      = $dataUsers['level'];
   $_SESSION['Status']     = $dataUsers['status'];
   $_SESSION['Created_at'] = $dataUsers['created_at'];
   $_SESSION['Updated_at'] = $dataUsers['updated_at'];
   $_SESSION['Login_at']   = $dataUsers['login_at'];
}
