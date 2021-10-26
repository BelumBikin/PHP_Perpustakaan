<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<center><h2>Meminjam Buku</h2></center>
<br>
<div class="row">
    <div class="col-md-4">
        <img src="buku.jpg" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td><b>Nama Buku</b></td><td><?=$dt_buku['judul_buku']?></td>
                    </tr>
                    <tr>
                        <td><b>Penulis</b></td><td><?=$dt_buku['penulis']?></td>
                    </tr>
                    <tr>
                        <td><b>Penerbit</b></td><td><?=$dt_buku['penerbit']?></td>
                    </tr>
                    <tr>
                        <td><b>Deskripsi</b></td><td><?=$dt_buku['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td><b>Jumlah Pinjam</b></td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Pinjam"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
