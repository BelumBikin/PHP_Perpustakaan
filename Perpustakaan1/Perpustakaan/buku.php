<?php 
    include "header.php";
?>
<center><h2>Daftar Buku Yang Tersedia</h2></center>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
    ?>
        <div class="col-md-3">
            <div class="card" align="center">
              <img src="buku.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['judul_buku']?></h5>
                Penulis :
                <b><p class="card-text"><?=substr($dt_buku['penulis'], 0,20)?></p></b>
                Penerbit:
                <b><p class="card-text"><?=substr($dt_buku['penerbit'], 0,100)?></p></b>
                Deskripsi:
                <b align="center" ><p class="card-text"><?=substr($dt_buku['deskripsi'], 0,100)?></p></b>
                <br>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
