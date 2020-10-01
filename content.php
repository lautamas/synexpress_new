<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

if (empty($_SESSION['IdUser'])) {
    //BELUM LOGIN
    switch ($halaman) {
        case 'dashboard':
            include 'view/dashboard.php';
            break;
        case 'contact':
            include 'view/contact-us.php';
            break;
        case 'informasi':
            include 'view/informasi.php';
            break;
        case 'layanan':
            include 'view/layanan-kami.php';
            break;
        case 'reg':
            include 'view/reg.php';
            break;
        case 'yes':
            include 'view/yes.php';
            break;
        case 'ulasan':
            include 'view/ulasan-rating.php';
            break;
        case 'login':
            include 'login.php';
            break;
        case 'register':
            include 'register.php';
            break;
        case 'aksi-login':
            include 'modul/aksi-login.php';
            break;
        default:
            echo "HALAMAN TIDAK DITEMUKAN";
            break;
    }
} else {
    //SUDAH LOGIN
    switch ($halaman) {
        case 'dashboard':
            include 'view/dashboard.php';
            break;
        case 'contact':
            include 'view/contact-us.php';
            break;
        case 'informasi':
            include 'view/informasi.php';
            break;
        case 'layanan':
            include 'view/layanan-kami.php';
            break;
        case 'reg':
            include 'view/reg.php';
            break;
        case 'yes':
            include 'view/yes.php';
            break;
        case 'ulasan':
            include 'view/ulasan-rating.php';
            break;
        case 'logout':
            include 'logout.php';
            break;

        default:
            echo "HALAMAN TIDAK DITEMUKAN";
            break;
    }
}
