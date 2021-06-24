<?php include("db/config.php");?>
<?php include('template/header.php');?>

<h3>Data Tamu</h3>
    <a class="btn btn-primary" href="add.php">Add New User</a><br/><br/>
    <table width='50%' border=1>
        <thead>
            <tr>
                <th>ID Tamu</th>
                <th>Nama Tamu</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("db/config.php");
        $sql = 'SELECT * FROM  tamu_hotel';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_tamu']?></td>
                <td><?php echo $row['nama_tamu']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><a class="btn btn-warning" href="edit.php?id=<?= $row['id_tamu']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row['id_tamu']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Data Kamar</h3>
    <a class="btn btn-primary" href="add.php">Add New User</a><br/><br/>
    <table width='50%' border=1>
        <thead>
            <tr>
                <th>ID Kamar</th>
                <th>Jenis Kamar</th>
                <th>Tarif/d</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("db/config.php");
        $sql = 'SELECT * FROM  kamar';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_kamar']?></td>
                <td><?php echo $row['jenis_kamar']?></td>
                <td><?php echo $row['tarif']?></td>
                <td><a class="btn btn-warning" href="edit.php?id=<?= $row['id_kamar']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row['id_kamar']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Data Transaksi</h3>
    <a class="btn btn-primary" href="add.php">Add New User</a><br/><br/>
    <table width='70%' border=1>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Tamu</th>
                <th>ID Kamar</th>
                <th>Tanngal Pesan</th>
                <th>Tanggal Cek In</th>
                <th>Tanggal cek Out</th>
                <th>Total Tarif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("db/config.php");
        $sql = 'SELECT * FROM  transaksi_hotel';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_tamu']?></td>
                <td><?php echo $row['id_kamar']?></td>
                <td><?php echo $row['tgl_pesan']?></td>
                <td><?php echo $row['tgl_cekin']?></td>
                <td><?php echo $row['tgl_cekout']?></td>
                <td><?php echo $row['total_tarif']?></td>
                <td><a class="btn btn-warning" href="edit.php?id=<?= $row['id_transaksi']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row['id_transaksi']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
<?php include('template/footer.php');?>