<?php
$server = 'localhost';
$user   = 'root';
$pass   = '123';
$db     = 'db_ekspedisio2';

$koneksi = mysqli_connect($server, $user, $pass, $db) or die(mysqli_error($konek));
