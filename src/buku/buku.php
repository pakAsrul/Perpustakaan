<!DOCTYPE html>
<html>

<head>
  <title>BUKU</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="header">
    <div style="display: flex">
      <div class="logo">
        <img src="../../assets/img/logo.png" alt="" height="40px" width="40px" />
      </div>
      <div>
        <h2>PERPUSTAKAAN NUSANTARA</h2>
      </div>
    </div>
  </div>

  <div class="nav">
    <p>
      Jadwal Buka : Senin - Kamis (08.00 - 16.00) &Jum'at - Sabtu (08.00 -
      13.00)
    </p>
  </div>
  <div style="display: flex;">
    <div class="samping">
      <a href="../admin.php">HOME</a>
      <a href="buku-entry.html">TAMBAH</a>
    </div>

    <div class="isi">
      <center>
        <h3>Daftar Buku</h3>
        <table border="1">
          <tr>
            <th width="5%">ID</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>TAHUN</th>
            <th>PENERBIT</th>
            <th width="10%" colspan="2">Action</th>
          </tr>
          <!-- Awal Record -->
          <?php
          include '../koneksi.php';
          $sql = "SELECT * FROM tb_buku ORDER BY id_buku ASC";
          $result = mysqli_query($koneksi, $sql);
          while ($data = mysqli_fetch_assoc($result)) {
            echo "
				    <tr>
						<td> $data[id_buku] </td>
						<td> $data[judul_buku] </td>
						<td> $data[penulis] </td>
						<td> $data[tahun] </td>
						<td> $data[penerbit] </td>
						<td> <a href=buku-edit.php?id=$data[id_buku]>Edit</a> </td>
						<td><a href=buku-delete.php?id=$data[id_buku]>Delete</td>
					</tr>
					";
          }
          ?>
          <!-- Akhir Record -->
        </table>
      </center>
    </div>
  </div>

  <div class="footer">
    <h4>&copy; Lab. Pemrograman Komputer ITN Malang 2022</h4>
  </div>
</body>

</html>