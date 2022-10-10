<!DOCTYPE html>
<html>

<head>
  <title>TRANSAKSI</title>
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
      <a href="../admin.html">HOME</a>
      <a href="transaksi-entry.html">TAMBAH</a>
    </div>

    <div class="isi">
      <center>
        <h3>Daftar Peminjaman & Pengembalian Buku</h3>
        <table border="1">
          <tr>
            <th width="5%">NO</th>
            <th>PEMINJAM</th>
            <th>BUKU</th>
            <th>TANGGAL PEMINJAMAN</th>
            <th>TANGGAL PENGEMBALIAN</th>
            <th>STATUS</th>
            <th width="10%" colspan="2">Action</th>
          </tr>
          <!-- Awal Record -->
          <?php
          include '../koneksi.php';
          $sql = "SELECT * FROM tb_transaksi ORDER BY id_transaksi ASC";
          $result = mysqli_query($koneksi, $sql);
          while ($data = mysqli_fetch_assoc($result)) {
            echo "
				    <tr>
						<td> $data[id_transaksi] </td>
						<td> $data[peminjam] </td>
						<td> $data[buku] </td>
						<td> $data[tgl_pinjam] </td>
						<td> $data[tgl_kembali] </td>
						<td> $data[status] </td>
						<td> <a href=transaksi-edit.php?id=$data[id_transaksi]>Edit</a> </td>
						<td><a href=transaksi-delete.php?id=$data[id_transaksi]>Delete</td>
					</tr>
					";
          }
          ?>
          <!-- Akhir Record -->
        </table>
      </center>
      <form action="proses-cetak.php">
          <input class="button-cetak" type="submit" value="cetak">
      </form>
    </div>
  </div>

  <div class="footer">
    <h4>&copy; Lab. Pemrograman Komputer ITN Malang 2022</h4>
  </div>
</body>

</html>