<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Yuhu Petshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
    <h3>Tambah Produk</h3>
    <form action="proses_tambah_produk.php" method="post">
        Nama Produk :
        <input type="text" name="nama_produk" value="" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="" class="form-control">
        Harga :
        <input type="number" name="harga" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-dark">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
