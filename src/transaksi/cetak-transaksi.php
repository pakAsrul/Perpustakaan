<html>

<head>
    <title>Cetak PDF</title>
</head>

<body>
    <h3>DAFTAR TRANSAKSI</h3>
    <table border="1">
        <tr>
            <th >ID_Transaksi</th>
            <th>Peminjam</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
        <?php
        include '../koneksi.php';
        $sql = "SELECT * FROM tb_transaksi";
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
					</tr>";
        } ?>
    </table>
</body>

</html>

