<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tampil_produk.php';</script>";

    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi produk tidak boleh kosong');location.href='tampil_produk.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tampil_produk.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into produk (nama_produk,deskripsi,harga) value ('".$nama_produk."','".$deskripsi."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tampil_produk.php';</script>";
        }
    }
}
?>