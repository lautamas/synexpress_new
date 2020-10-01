  <!-- HEADER -->
  <section id="header">
    <div class="row">
      <div class=col-lg-12>
        <nav class="navbar navbar-expand-lg navbar-light bg-orange">
          <div class="container">
            <a class="navbar-brand" href="index.php"><img src="./img/logo.png">SYN EXPRESS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="?page=layanan">Layanan Kami</a>
                <a class="nav-link" href="?page=contact">Contact Us</a>

                <?php
                if (empty($_SESSION['IdUser'])) {
                  //SEBELUM LOGIN
                  echo '<a class="nav-link" href="?page=login">Login</a>';
                  echo '<a class="nav-link" href="?page=register">Register</a>';
                } else {
                  //SETELAH LOGIN
                  echo '<a class="nav-link" href="#">' . $_SESSION['Username'] . '</a>';
                  echo '<a class="nav-link" href="?page=logout">Logout</a>';
                }
                ?>


              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <!-- AKHIR HEADER -->