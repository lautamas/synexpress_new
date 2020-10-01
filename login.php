<!-- Halaman REG -->
<section id="judul-reg">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2> <b>Login</b> to your account</h2>
                <hr style="width: 80px; border-width: 3px; border-color: white">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center ">
                <div class="cek-biaya-yes">
                    <h5>Gunakan username untuk login <br>
                        <?php tampilNotif() ?>
                    </h5>
                    <form action="?page=aksi-login" method="POST">
                        <p>
                            <input class="form-control" name="username" type="text" placeholder="Username">
                        </p>
                        <p>
                            <input class="form-control" name="password" type="text" placeholder="Password">
                        </p>
                        <p>
                            <input name="rememberme" type="checkbox" id="rememberme"> <label for="rememberme">Remember me</label>
                        </p>
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <p>
                                    <button type="submit" name="login" class="btn btn-warning">Login </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir halaman YES -->