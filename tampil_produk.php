<?php 
    include "header.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Yuhu Petshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto">
							<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="tampil_produk.php" class="nav-link">Produk</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
	              	</div>
    <h3><a href="tambah_produk.php" class="btn btn-dark">Tambah Produk</a></h3>
    <table class="table table-hover table striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PRODUK</th><th>DESKRIPSI</th>
                <th>HARGA</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_produk=mysqli_query($conn, "select *from produk");
            $no=0;
            while($data_produk=mysqli_fetch_array($qry_produk)) {
                $no++;?>
            <tr>
               <td><?=$no?></td><td><?=$data_produk['nama_produk']?></td>
               <td><?=$data_produk['deskripsi']?></td>
               <td><?=$data_produk['harga']?></td>
               <td><a href="ubah_produk.php?id_=<?=$data_produk['id_produk']?>" class="btn btn-dark">Ubah</a> | <a
               href="hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>" onclick="return confirm('apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a> </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>