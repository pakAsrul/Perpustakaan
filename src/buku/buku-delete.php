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

        <div class="isi-data">
            <div class="form-data">
                <h2>Hapus Data Buku</h2>
                <h4>Apakah Anda Yakin ?</h4>
                <form action="buku-proses.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <table>
                        <tr>
                            <td><input type="submit" class="btn_tambah" name="delete" value="YA"></td>
                            <td><input type="submit" class="btn_tambah" name="no" value="TIDAK"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <h4>&copy;Lab. Pemrograman Komputer ITN Malang 2022</h4>
    </div>

</body>

</html>