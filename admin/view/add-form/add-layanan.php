<h3>Tambah Data Layanan</h3>
<form action="?page=aksi-layanan" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="layanan">Layanan</label>
                <input type="layanan" class="form-control" name="layanan" id="layanan">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="link">Link</label>
                <input type="link" name="link" class="form-control" id="link">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="Keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="5"></textarea>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" class="form-control" name="icon" id="icon">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <input type="checkbox" id="status_layanan" name="status_layanan" checked>
                <label for="status">Aktif</label>
            </div>
        </div>
        <div class="col">
            </select>
        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-primary" name="save-layanan" style="width: 50%;">Simpan</button>
        <a href="?page=layanan" class="btn btn-danger">Batal</a>
    </center>
</form>