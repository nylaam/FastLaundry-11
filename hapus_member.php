<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus_member=mysqli_query($conn,"delete from member where id = '".$_GET['id']."'");
        if($qry_hapus_member){
            echo"<script>alert('Sukses Hapus Member');location.href='tampil_member.php';</script>";  
        }else{
            echo"<script>alert('Gagal Hapus Member');location.href='tampil_member.php';</script>";
        }
    }
?>