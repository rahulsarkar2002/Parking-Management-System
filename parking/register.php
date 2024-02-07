<?php
  $mysqlli = new mysqli("localhost","name","address","email","vehicle")
  ?>
$servername = "localhost";
$name = "name";
$address = "address";
$email = "email";
$vehicle = "vehicle";


if(isset($_POST['register_button']))

//Registration form values

  //First name
  $name = strip_tags($_POST['reg_name']); //Remove html tags
  $fname = str_replace(' ', '', $name); //remove spaces
  $fname = ucfirst(strtolower($name)); //uppercase first letter

  // Address
  $address = strip_tags($_POST['reg_address']); //Remove
  $address = str_replace(' ', '', $address); //sx
  $address = ucfirst(strtolower($address)); //upper

  //Email
  $em = strip_tags($_POST['reg_email']); //Remove html tags
  $em = str_replace(' ', '', $email); //remove spaces
  $em = ucfirst(strtolower($email)); //uppercase first letter

 // vehicle
  $vehicle = strip_tags($_POST['reg_vehicle']); //Remove
  $vehicle = str_replace(' ', '', $vehicle); //sx
  $vehicle = ucfirst(strtolower($vehicle)); //uppe

?>


<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
</head>
<body>

<form action = "register.php" method="POST">
	<input type = "text" name ="reg_name" placeholder = "name" required>
	 <br>
	<input type = "text" name ="reg_address" placeholder = "address" required>
	<br>
	<input type = "text" name ="reg_email" placeholder = "email" required>
	<br>
	<input type = "text" name ="reg_vehicle" placeholder = "vehicle_" required>
	<br>
	<input type = "submit" name ="register_button" value = "register" required>

</body>
</html>