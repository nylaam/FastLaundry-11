<?php
include "header.php";
?>
<ul>
    <br>
    <h3>
    <center><small class="display-6">DAFTAR PAKET</small></center>
    </h3>
    <br>
<br>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_paket = mysqli_query($conn, "select * from paket");
    while ($dt_paket = mysqli_fetch_array($qry_paket)) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img src="foto_paket/<?= $dt_paket['foto'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $dt_paket['jenis'] ?></h5>
                    <p class="card-text"><?= $dt_paket['harga'] ?></p>
                    <td><a href="ubah_paket.php?id=<?= $dt_paket['id'] ?>" class="btn btn-success">Ubah</a>
                        <a href="hapus_paket.php?id=<?= $dt_paket['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<br>
<a class="btn btn-primary" href="tambah_paket.php" role="button">Tambah</a>
<?php
include "footer.php";
?>