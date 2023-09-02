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
    <h3>USER</h3>
    <form action="proses_tambah_user.php" method="post">
        Nama User :
        <input type="text" name="nama" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Login As : 
        <select name="role" class="form-control">
            <option></option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
        </select>
        <input type="submit" name="simpan" value="Tambah User" class="form-btn btn btn-primary">
    </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>