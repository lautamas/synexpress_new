<?php

function lihatLayanan()
{
    global $koneksi;
    $x = [];
    $sql   = "SELECT * FROM tb_layanan";
    $query = mysqli_query($koneksi, $sql);
    while ($data  = mysqli_fetch_assoc($query)) {
        $x[] = $data;
    }

    return $x;
}

function getLayananByIdA($id)
{
    global $koneksi;
    $sql   = "SELECT * FROM `tb_layanan` WHERE tb_layanan.id_layanan = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $data  = mysqli_fetch_assoc($query);

    return $data;
}

function insertLayanan($data)
{
    global $koneksi;
    $sql = "INSERT INTO `tb_layanan`(`layanan`, `keterangan`, `icon`, `link`, `status_layanan`) VALUES ('$data[layanan]','$data[keterangan]', '$data[icon]', '$data[link]', '$data[status_layanan]')";
    $query = mysqli_query($koneksi, $sql);
    return $query;
}


function updateLayanan($data)
{
    global $koneksi; {
        $sqlUsers = "UPDATE `tb_layanan` SET `layanan`= '$data[layanan]', `keterangan`= '$data[keterangan]',`icon`='$data[icon]',`link`='$data[link]',`status_layanan`= '$data[status_layanan]' WHERE id_layanan='$data[idLayanan]'";
    }
    $query = mysqli_query($koneksi, $sqlUsers);
    return $query;
}

function deleteLayanan($id = null)
{
    global $koneksi;
    if ($id == null) {
        $sql = "DELETE FROM `tb_layanan`";
    } else {
        $sql = "DELETE FROM `tb_layanan` WHERE id_layanan='$id'";
    }
    $query = mysqli_query($koneksi, $sql);
    return $query;
}
