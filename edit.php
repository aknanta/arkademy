<?php 
    include_once("config.php");

    if(isset($_POST['update']))
    {
        $id         = $_POST['id'];
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga      = $_POST['harga'];
        $jumlah     = $_POST['jumlah'];

        $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=$id");

        header("Location: index.php");
    }
?>
<?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");

    while($p = mysqli_fetch_array($result)){
        $nama_produk = $p['nama_produk'];
        $keterangan = $p['keterangan'];
        $harga = $p['harga'];
        $jumlah = $p['jumlah'];
    }
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
<form action="edit.php" method="POST" name="update">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" value=<?php echo $nama_produk; ?>>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" value=<?php echo $keterangan; ?>>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga" value=<?php echo $harga; ?>>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
        <input type="text" class="form-control" name="jumlah" value=<?php echo $jumlah; ?>>
    </div>
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
    <button type="submit" class="btn btn-primary" name="update">Submit</button>
    </form>
</body>
</html>