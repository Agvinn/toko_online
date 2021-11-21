<?php 
    include "index.html";
?>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-4 bg-light">
                    <div class="container mt-3">
                        <div class="card">
                            <div class="card-header text-dark"><center><b>BAK PASIR</b></center></div>
                            <div class="card-body"><center><img src="bakPasir.jpg" height="60%" width="60%"></center></div> 
                            <a href="detail_produk.php?id_produk=<?=$dt_produk['id_produk']?>" ><center><button>Detail</button></center</a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-3">
        <?php
    }
    ?>
</div>
