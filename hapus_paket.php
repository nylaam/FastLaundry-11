<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus_paket=mysqli_query($conn,"delete from paket where id = '".$_GET['id']."'");
        if($qry_hapus_paket){
            echo"<script>alert('Sukses Hapus Paket');location.href='tampil_paket.php';</script>";  
        }else{
            echo"<script>alert('Gagal Hapus Paket');location.href='tampil_paket.php';</script>";
        }
    }
?>