<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM produk ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
            <?php 
            while($p = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$p['nama_produk']."</td>";
            echo "<td>".$p['keterangan']."</td>";
            echo "<td>".$p['harga']."</td>";
            echo "<td>".$p['jumlah']."</td>";
            echo "<td><a href='edit.php?id=$p[id]'>Edit</a> | <a href='delete.php?id=$p[id]'>Delete</a></td></tr>";
            echo "</tr>";
            
            }
            ?>
        </thead>
    </table>
</body>
</html>