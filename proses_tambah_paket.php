<?php
if ($_POST) {
    $jenis = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto'];
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if (empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    }
    
     else {
        if ($ukuran < 1044070) {
            $xx = $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'foto_paket/' . '' . $filename);
            include "koneksi.php";
            $insert = mysqli_query($conn, "insert into paket (jenis, harga, foto) value ('" . $jenis . "','" . $harga . "','" . $filename . "')") or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
            }
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
        }
    }
}
