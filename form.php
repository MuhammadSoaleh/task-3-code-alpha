<?php
if (isset($_POST['sub'])) {
	$conn = new mysqli("localhost", "root", "", "event planner");
	
	$firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address_1 = $_POST['address_1'];
	$address_2= $_POST['address_2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];


  $sql="INSERT INTO `rigistration`(`firstname`, `lastname`, `email`, `password`, `address_1`, `address_2`, `city`, `state`, `zip`) VALUES ('[$firstname]','[$lastname]','[$email]','[$password]','[$address_1]','[$address_2]','[$city]','[$state]','[$zip]')";
  $row = mysqli_query($conn, $sql);
	if ($row) {
		echo "<script> alert('submited succesfully') </script>";
		
	} else {
		echo "<script> alert('error') </script>";
	}}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
    label,h1,h2,h3,h4,h5{
      color: white;
    }
  </style>
  </head>
  <body style="background-image: url(images/christmas-8396868.png); background-repeat:no-repeat;">
  <div class="container-fluid">
    <!-- Page Heading -->
   <CEnter><h2 style="font-family: 'Platypi', serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;">RIGISTRATION FORM</h2></CEnter> 
   <form method="post" class="row g-3">
   <div class="row g-3">
  <div class="col">
    <label for="">First Name</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname">
  </div>
  <div class="col">
    <label for="">Last Name</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname">
  </div>
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address_1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address_2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-md-4">
  <label  class="form-label">State</label>
    <input type="text" class="form-control" id="" name="state">
  </div>
  <div class="col-md-2">
    <label for="" class="form-label">Zip</label>
    <input type="number" class="form-control" id="" name="zip">
  </div>
  <div class="col-12">
    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


