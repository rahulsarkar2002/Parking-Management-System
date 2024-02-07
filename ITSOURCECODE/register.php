<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <style>
  body{
    background-color: darkgrey;
    display: ruby-text-container;
  }
  input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 10px;
    padding:10px 15px 10px 15px;
    margin:15px 0px 15px 0px;
    box-shadow: 2px 2px 3px 2px brown;
    text-shadow: grey;
    text-align: center;
  }
</style>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <center>
  <h1>Register</h1>
<div class="reg-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" required />
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:21em;" placeholder="Enter your Gender" required pattern="[a-zA-Z .]+" />
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:22em;" placeholder="Enter your Age">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:21em;" required placeholder="Enter your Address"></textarea>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username">
          </div><div class="form-group">
            <label>Password</label>
            <input type="Password" class="form-control" name="pass" style="width:20em;" required  placeholder="Enter your Password">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:25em; margin:30;" /><br><br>
             <a href="index.php">LogIn</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      include 'connection.php';
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$user = $_POST['user'];
$pass = $_POST['pass'];


  $query = "INSERT INTO users
                (username, password, full_name,gender,age,address)
                VALUES ('".$user."','".$pass."','".$fname."','".$gender."','".$age."','".$address."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfull Added.");
            window.location = "index.php";
        </script>
                <?php
}
      ?>