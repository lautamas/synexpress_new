<h3>Data Layanan
    <a href="?page=add-layanan" class="btn btn-outline-info float-right"><i class="fa fa-plus"></i> Tambah Data</a>
    <a href="?page=aksi-layanan&delete=all" class="btn btn-outline-info float-right" onclick="return confirm('Yakin ingin menghapus data ? ')"><i class="fa fa-times"></i> Hapus Semua Data</a>
</h3>
<?php tampilNotif() ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">icon</th>
            <th scope="col">layanan</th>
            <th scope="col">keterangan</th>
            <th scope="col">link</th>
            <th scope="col">status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach (lihatLayanan() as $data) : ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $data['icon'] ?></td>
                <td><?= $data['layanan'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td><?= $data['link'] ?></td>
                <td><?= $data['status_layanan'] ?></td>
                <td>
                    <a href="?page=edit-layanan&id=<?= $data['id_layanan'] ?>" title="Ubah data"><i class="fa fa-edit text-info"></i></a> &nbsp;
                    <a href="?page=aksi-layanan&delete=one&id=<?= $data['id_layanan'] ?>" title="Hapus data" onclick="return confirm('Yakin ingin menghapus data ? ')"><i class="fa fa-trash text-danger"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>