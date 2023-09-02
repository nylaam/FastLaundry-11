<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        .mg{
            width: 300px;
        }
    </style>
</head>
<body>
<ul>
    <br>
    <h3>
    <center><small class="display-6">DAFTAR PAKET</small></center>
    </h3>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
    <th>JENIS PAKET</th>
    <th>HARGA</th><th>FOTO PRODUK</th>
    <th>AKSI</th>
    
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
            $no++;?>
            <tr><td><?=$no?></td>
            <td><?=$data_paket['jenis']?></td> 
            <td><?=$data_paket['harga']?></td> 
            <td><img src="foto_paket/<?= $data_paket['foto'] ?>" class="card-img-top mg"></td>
            <td><a href="ubah_paket.php?id=<?=$data_paket['id']?>" 
            class="btn btn-success">Ubah</a> | 
            <a href="hapus_paket.php?id=<?=$data_paket['id']?>" 
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a></td>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="tambah_paket.php" role="button">Tambah</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include "footer.php";
?>