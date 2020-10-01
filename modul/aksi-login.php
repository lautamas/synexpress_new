<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $cekLogin = cekLogin($username, $password);
      $dataUsers = getUsersByUsername($username);

      if ($cekLogin == 'ok') { //LOGIN BERHASIL
         //BUAT COOKIE
         if ($_POST['rememberme'] == 'on') {
            setcookie("IDUSER", $dataUsers['id_user'], time() + $configTimeCookie);
         }
         //BUAT SESSION
         $_SESSION['IdUser']     = $dataUsers['id_user'];
         $_SESSION['Username']   = $dataUsers['username'];
         $_SESSION['Level']      = $dataUsers['level'];
         $_SESSION['Status']     = $dataUsers['status'];
         $_SESSION['Created_at'] = $dataUsers['created_at'];
         $_SESSION['Updated_at'] = $dataUsers['updated_at'];
         $_SESSION['Login_at']   = $dataUsers['login_at'];

         header("Location: index.php");
      } else if ($cekLogin == 'salahUsername') {
         notif('Username yang anda inputkan salah', 'danger');
         header("Location: ?page=login");
      } else if ($cekLogin == 'salahPassword') {
         notif('Password yang anda inputkan salah', 'danger');
         header("Location: ?page=login");
      } else if ($cekLogin == 'akunNonAktif') {
         notif('Status akun tidak aktif. Silakan hub. Admin', 'warning');
         header("Location: ?page=login");
      }
   }
} else {
   header('Location: index.php');
}
