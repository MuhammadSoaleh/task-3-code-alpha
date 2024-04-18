<?php
if (isset($_POST['sub'])) {
	$conn = new mysqli("localhost", "root", "", "event planner");
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  
$hash = password_hash($password, PASSWORD_DEFAULT);
	$sql="INSERT INTO `event orginizer`(`name`, `email`, `password`) VALUES ('$name', '$email','$hash')"; 

	
	

	$row = mysqli_query($conn, $sql);
	if ($row) {$_SESSION['name']=$name;
		echo "<script> alert('submited succesfully') </script>";
		header('location:login.php');
	} else {
		echo "<script> alert('error') </script>";
	}
	
}


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    ::placeholder ,button{font-family:"Poppins",sans-serif;
        color: #ffc0cb !important;
    }
   input[type="submit"]:hover{
color: #ff3355!important ;
    }
</style>  
</head>
  <body style="background-image: url('images/event-6927353_1920.jpg');">
    <div class="container-fluid col-9">
        <center> <h1 style=" font-family: 'Lobster', sans-serif;
  font-weight: 400;
  font-style: normal;" class="text-white">Sign Up</h1></center>
        <form method="post">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
  <label for="floatingInput">Name</label>
</div>
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
</div>
<input type="submit" value="Create Account" style="background-color: #ffc0cb; border:#ffc0cb" name="sub" class="rounded-pill text-white mt-2">
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>