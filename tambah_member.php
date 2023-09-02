<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
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
    <h3>Member</h3>
    <form action="proses_tambah_member.php" method="post">
        Nama Member :
        <input type="text" name="nama" value="" class="form-control">
        Alamat : 
        <input type="text" name="alamat" value="" class="form-control">
        Jenis Kelamin : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Telepon : 
        <input type="text" name="tlp" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Member" class="form-btn btn btn-primary">
    </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>