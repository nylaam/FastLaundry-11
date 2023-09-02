<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Paket</title>
    <style>
        .container {
    margin: 0 auto;
    width: 70%;
}

.container h3{
    font-family: 'Poppins';
    margin-top: 2rem;
    text-align: center;
}

.form-btn{
    background-color: turquoise;
    color: white;
    padding: 15px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 50px;
    padding-right: 50px;
    margin: 2rem;
    margin-left: auto;
    border: 10px;
}
    </style>
</head>

<body>
    <div class="container">
    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data" >
        Nama Paket :
        <input type="text " name="nama_paket" value="" class="form-control">
        Harga :
        <input type="number" name="harga" value="" class="form-control">
        Foto : 
        <input type="file" name="foto" value="" accept=".png, .jpg, .jpeg, .gif, .JPG" class="form-control"> 
        <br>
        <input type="submit" name="simpan" value="Tambah paket" class="form-btn btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>