<?php
session_start();

// initializing variables
$ent_time = "";
$ext_time    = "";
$Employee_Name = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'employee');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $ent_time = mysqli_real_escape_string($db, $_POST['ent_time']);
  $ext_time = mysqli_real_escape_string($db, $_POST['ext_time']);
  $Employee_Name = mysqli_real_escape_string($db, $_POST['Employee_Name']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ent_time)) { array_push($errors, "ent_time is required"); }
  if (empty($ext_time)) { array_push($errors, "ext_time is required"); }
  if (empty($Employee_Name)) { array_push($errors, "Employee_Name is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM etiming WHERE ent_time='$ent_time' OR ext_time='$ext_time' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  	$query = "INSERT INTO etiming (ent_time,ext_time,Employee_Name) 
  			  VALUES('$ent_time', '$ext_time','$Employee_Name')";
          mysqli_query($db, $query);
    $_SESSION['ent_time'] = $ent_time;
    $_SESSION['ext_time'] = $ext_time;
    $_SESSION['Employee_Name'] = $Employee_Name;
  }


