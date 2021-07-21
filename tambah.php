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
    <form action="tambah.php" method="POST" name="form1">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
        <input type="text" class="form-control" name="jumlah">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $nama_produk       = $_POST['nama_produk'];
            $keterangan = $_POST['keterangan'];
            $harga      = $_POST['harga'];
            $jumlah     = $_POST['jumlah'];

            include_once("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama_produk','$keterangan','$harga','$jumlah')");

            echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data</a>";
        }
    ?>
</body>
</html>