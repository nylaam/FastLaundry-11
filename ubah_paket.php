<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where 
id = '".$_GET['id']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Tambah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id" value= 
  "<?=$dt_paket['id']?>">
        Jenis :
        <?php 
        $arr_jenis=array('Kiloan'=>'Kiloan','Selimut'=>'Selimut','Bed_Cover'=>'Bed_Cover','Kaos'=>'Kaos');
        ?>
        <select name="jenis" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis as $key_jenis => $val_jenis):
                if($key_jenis==$dt_member['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_jenis?>" <?=$selek?>><?=$val_jenis?></option>
            <?php endforeach ?>
        </select>
        Harga : 
<input type="int" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
        Foto Produk :
        <input type="file" name="foto" value="" accept=".png, .jpg, .jpeg, .gif, .JPG" class="form-control">
        <br>
<input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
     crossorigin="anonymous"></script>
</body>
</html>