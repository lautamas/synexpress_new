<h3>Tambah Data Users</h3>
<form action="?page=aksi-users" method="POST">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Masukkan email dengan benar.</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" name="namaDepan" id="namaDepan">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" name="namaBelakang" id="namaBelakang">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <input type="checkbox" id="status" name="status" checked>
            <label for="status">Aktif</label>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" name="level" class="form-control">
               <option value="customer">Customer</option>
               <option value="kurir">Kurir</option>
               <option value="admin">Admin</option>
            </select>
         </div>
      </div>
   </div>

   <center>
      <button type="submit" class="btn btn-primary" name="save-users" style="width: 50%;">Simpan</button>
      <a href="?page=users" class="btn btn-danger">Batal</a>
   </center>
</form>