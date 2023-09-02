<?php
session_start();
if (isset($_SESSION['status_login'])) {
  header('location: home.php');
} else {
?>
<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
<body>
<body  style="background-image: 2.jpg;">
	<div class="container">
		<form action="proses_login.php" method="post" class="login-email">
          <p class="login-text" style="font-size: 2rem; font-weight: 800;">Fast Laundry</p>
          <div class="input-group">
				  <input type="text" placeholder="Username" name="username" value="" class="form-control">
			    </div>
          <div class="input-group">
			  	<input type="password" placeholder="Password" name="password"  class="form-control">
          </div>
          Login As : 
          <select name="role" class="input-group"><br>
            <option></option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
          </select>
          <br>
          <center><p class="login-register-text">Don't have an account? <a href="tambah_user.php">Sign Up Here!!</a></p><br></center>
          <div class="input-group">
			  	<button name="submit" name="login" class="btn" value="LOGIN">Sign In</button>
			    </div>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>

<?php 
}
?>