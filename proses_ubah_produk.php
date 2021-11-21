<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk=$_POST['foto_produk'];

        if(empty($nama_produk)||empty($deskripsi)){
            echo "<script>alert('Semua data harus di isi!');location.href='ubah_produk.php?id_produk=$id_produk'</script>";
            } else {
            include "koneksi.php";
            $query = "update produk set nama_produk='$nama_produk',deskripsi='$deskripsi',harga='$harga', foto_produk='$foto_produk' where id_produk='$id_produk'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update produk');location.href='produk.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='proses_ubah_produk.php?id_produk=".$id_produk."';</script>";
            } 
        }
    }
?>