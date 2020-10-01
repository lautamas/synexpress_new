<?php
session_destroy();
setcookie("IDUSER", $_COOKIE['IDUSER'], time() - 99999);
header("Location: index.php");
