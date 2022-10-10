<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="header">
      <div style="display: flex">
        <div class="logo">
          <img src="../assets/img/logo.png" alt="" height="40px" width="40px" />
        </div>
        <div>
          <h2>PERPUSTAKAAN NUSANTARA</h2>
        </div>
      </div>
      <div class="list-menu">
        <a href="logout.php" style="color: white">Logout</a>
      </div>
    </div>
    <div style="display: flex">
      <div class="samping">
        <a href="admin.php">HOME</a>
        <a href="./buku/buku.php">BUKU</a>
        <a href="transaksi/transaksi.php">TRANSAKSI</a>
      </div>
      <div class="isi">
        <center>
          <h2>Selamat Datang di Halaman Admin,
            <?php
                session_start();
                echo $_SESSION['nama'];
            ?>
          </h2>
        </center>
      </div>
    </div>

    <div class="footer">
      <h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 2021</h4>
    </div>
  </body>
</html>
