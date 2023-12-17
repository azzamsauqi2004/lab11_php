<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($koneksi, $sql);
?>

<html>
    <head>
        <title>Contoh modularisasi</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="contaner">
            <header>
                <h1>Modularisasi </h1>
            </header>
            <nav>
                <a href="home.php">Home</a>
                <a href="about.php">Tentang</a>
                <a href="kontak.php">Kontak</a>
            </nav>
            
        </div>
        

        <div class="main">
            <table>
                <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
                </tr>
                

                <?php if ($result): ?>
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td>"<img src="samsung.jpg<?= $row['gambar'];?> alt="<?= $row['nama']; ?>>"</td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $row['harga_beli']; ?></td>
                            <td><?= $row['harga_jual']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td><?= $row['id_barang']; ?></td>
                        </tr>
                        <?php endwhile; else: ?>
                            <tr>
                                <td colspan="7">belum ada data</td>
                            </tr>
                            <?php endif; ?> 
                                
            </table>
        </div>


    </body>
</html>