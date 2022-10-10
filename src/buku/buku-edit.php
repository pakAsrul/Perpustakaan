<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
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
    <div style="display: flex">
        <div class="samping">
            <a href="../admin.php">HOME</a>
            <a href="buku.php">KEMBALI</a>
        </div>

        <?php
        include '../koneksi.php';
        $id = $_GET['id'];
        if (!isset($_GET['id'])) {
            echo "
		<script>
			alert('Tidak ada ID yang Terdeteksi');
			window.location = 'buku.php';
		</script>
		";
        }
        $sql = "SELECT * FROM tb_buku WHERE id_buku = '$id'";
        $result = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>

        <div class="isi-data">
            <div class="form-data">
                <h3>Edit Data Buku</h3>
                <form action="buku-proses.php" method="POST">
                    <table>
                        <tr>
                            <td>ID Buku</td>
                            <td>:</td>
                            <td><input class="input_data" type="text" name="id" value="<?php echo $id ?>" ></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td><input class="input_data" type="text" name="judul" value="<?php echo $data['judul_buku'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Penulis</td>
                            <td>:</td>
                            <td><input class="input_data" type="text" name="penulis" value="<?php echo $data['penulis'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Tahun Terbit</td>
                            <td>:</td>
                            <td><input class="input_data" type="number" name="tahun" value="<?php echo $data['tahun'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td>:</td>
                            <td><input class="input_data" type="text" name="penerbit" value="<?php echo $data['penerbit'] ?>"></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn_tambah" name="edit">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <h4>&copy; Lab. Pemrograman Komputer ITN Malang 2022</h4>
    </div>

</body>

</html>