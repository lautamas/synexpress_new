<?php

if (isset($_POST['save-layanan'])) {

    $data = [
        "layanan"       => $_POST['layanan'],
        "keterangan"    => $_POST['keterangan'],
        "icon"          => $_POST['icon'],
        "link"          => $_POST['link'],
        "statuslayanan" => $_POST['status_layanan'] == 'on' ? 'AKTIF' : 'TIDAK AKTIF',
    ];
    $insertData = insertLayanan($data);

    if ($insertData) {
        notif('Berhasil Menambahkan data layanan', 'success');
        header("Location: ?page=layanan");
    }
}

if (isset($_POST['update-layanan'])) {
    $data = [
        "idLayanan"    => $_POST['idLayanan'],
        "layanan"       => $_POST['layanan'],
        "keterangan"    => $_POST['keterangan'],
        "icon"          => $_POST['icon'],
        "link"          => $_POST['link'],
        "status_layanan" => isset($_POST['status_layanan']) ? $_POST['status_layanan'] == 'on' ? 'AKTIF' : 'TIDAK AKTIF' : 'TIDAK AKTIF',
    ];

    $updateData = updateLayanan($data);

    if ($updateData) {
        notif("Berhasil Mengubah data Layanan", 'success');
        header("Location: ?page=layanan");
    }
}

if (isset($_GET['delete'])) {
    if ($_GET['delete'] == 'one') {
        $idlayanan = $_GET['id'];

        $delete = deletelayanan($id_layanan);

        if ($delete) {
            notif("Berhasil menghapus data layanan", 'success');
            header("Location: ?page=layanan");
        }
    } else if ($_GET['delete'] == 'all') {
        $delete = deletelayanan();

        if ($delete) {
            notif("Berhasil menghapus data layanan", 'success');
            header("Location: ?page=layanan");
        }
    }
}
