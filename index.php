<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem toko</title>
</head>
<body>
<header>
        <h1>Sistem Database</h1>
</header>
<div class="header">
    <div class="main"></div>
</div>
    <h3>Tabel Suplier</h3>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Suplier</th>
                <th>Nama Suplier</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  suplier';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_suplier']?></td>
                <td><?php echo $row['nama_suplier']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['no_telp']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Produk</h3>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>ID Suplier</th>
                <th>Nama produk</th>
                <th>harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  produk';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['id_suplier']?></td>
                <td><?php echo $row['nama_produk']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['stok']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Pembeli</h3>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>jenis Kelamin</th>
                <th>No Telp</th></th>
                <th>Alamat</th></th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  pembeli';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['nama_pembeli']?></td>
                <td><?php echo $row['jk']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><?php echo $row['alamat']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Transaksi</h3>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Produk</th>
                <th>ID Pembeli</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  transaksi';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['keterangan']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Tabel Pembayaran</h3>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Tanggal bayar</th>
                <th>Total bayar</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  pembayaran';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_bayar']?></td>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['tgl_bayar']?></td>
                <td><?php echo $row['total_bayar']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika </p>
    </footer>
</body>
</html>

