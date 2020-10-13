<?php
$data = getUsersByIdA($_GET['id']);
?>
<h3>Ubah Data Users</h3>
<form action="?page=aksi-users" method="POST">
   <input type="text" class="form-control" name="idUser" id="idUser" value="<?= $data['id_user'] ?>" hidden readonly>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= $data['email'] ?>">
            <small id="emailHelp" class="form-text text-muted">Masukkan email dengan benar.</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
            <small id="emailHelp" class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" name="namaDepan" id="namaDepan" value="<?= $data['nama_depan'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" name="namaBelakang" id="namaBelakang" value="<?= $data['nama_belakang'] ?>">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <input type="checkbox" id="status" name="status" <?= $data['status'] == 'Y' ? 'checked' : '' ?>>
            <label for="status">Aktif</label>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" name="level" class="form-control">
               <option value="customer" <?= $data['level'] == 'customer' ? 'selected' : '' ?>>Customer</option>
               <option value="kurir" <?= $data['level'] == 'kurir' ? 'selected' : '' ?>>Kurir</option>
               <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            </select>
         </div>
      </div>
   </div>

   <center>
      <button type="submit" class="btn btn-primary" name="update-users" style="width: 50%;">Simpan Perubahan</button>
      <a href="?page=users" class="btn btn-danger">Batal</a>
   </center>
</form>