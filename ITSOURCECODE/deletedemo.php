<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <style>
  body{
    background : "grey";
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
            <label>user_id</label>
            <input type="number" class="form-control" name="user_id" style="width:20em;" placeholder="Enter your Fullname" required />
          </div>
            
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:25em; margin:30;" /><br><br>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      include 'connection.php';
if(isset($_POST['submit'])){
$user_id = $_POST['user_id'];


  $query = "DELETE FROM users WHERE user_id = '$user_id'";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfull Added.");
            window.location = "index.php";
        </script>
                <?php
}
      ?>