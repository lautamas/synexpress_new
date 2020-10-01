<?php
$configTimeCookie  = (60 * 60) * 24;
function notif($pesan, $jenisPesan)
{
   if ($jenisPesan == 'success') {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } else if ($jenisPesan == 'warning') {
      $_SESSION['notif'] = "<div class='alert alert-warning'>$pesan</div>";
   } else if ($jenisPesan == 'danger') {
      $_SESSION['notif'] = "<div class='alert alert-danger'>$pesan</div>";
   }
}

function tampilNotif()
{
   if (isset($_SESSION['notif'])) {
      echo $_SESSION['notif'];
      unset($_SESSION['notif']);
   }
}
