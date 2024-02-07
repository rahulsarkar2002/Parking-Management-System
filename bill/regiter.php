<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <style>
  body{
    background: "12344.gif";
    display: ruby-text-container;
  }
  input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 15px;
    padding:10px 15px 10px 15px;
    margin:15px 0px 15px 0px;
    box-shadow: 2px 2px 3px 2px yellow;
    text-shadow: grey;
    text-align: right;
  }
</style>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <body background="25852.JPG">
  <center>
  <h1>Bill Printing</h1>
<?php
      include 'connection.php';
    $Fullname = "";
    $Address = "";
    $phonenumber = "";
    $Car_type = "";
    $Hours = "";
    $Old_user = "";
    $Car_wash = "";
    if(isset($_POST['submit'])){
    $Fullname = $_POST['Fullname'];
    $Address = $_POST['Address'];
    $phonenumber = $_POST['phonenumber'];
    $Car_type = $_POST['Car_type'];
    $Hours = $_POST['Hours'];
    $Old_user = $_POST['Old_user'];
    $Car_wash = $_POST['Car_wash'];
    
      if ($Car_type ==2 && $Car_wash == 'yes') 
      {
        $result = (($Hours * 75) + 500);
      }
      else if ($Car_type == 2 && $Car_wash == 'no')
      {
       $result = ($Hours * 75);
      }
      else if ($Car_type == 3 && $Car_wash == 'yes') {
       $result = (($Hours * 100) + 500);
      }
      elseif ($Car_type == 3 && $Car_wash == 'no') {
       $result = (($Hours * 100) + 500);
      }
      elseif ($Car_type == 4 && $Car_wash == 'yes') {
        $result = (($Hours * 150) + 500);
      }
      elseif ($Car_type == 4 && $Car_wash == 'no') {
        $result = ($Hours * 150);
      }
    if ($Old_user == 'yes')
    {
      $result = $result * 90/100;
    }
      $query = "INSERT INTO users
                (Fullname, Address, phonenumber,Car_type,Hours,Old_user,Car_wash,result)
                VALUES ('$Fullname','$Address','$phonenumber','$Car_type','$Hours','$Old_user','$Car_wash','$result')";
                mysqli_query($db,$query)or die ('Error in updating Database');
  }        
?>

<div class="reg-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post">
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="Fullname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $Fullname; ?>" required >
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="Address" style="width:21em;" placeholder="Enter your Address" value="<?php echo $Address; ?>" required pattern="[a-zA-Z .]+" />
          </div>
          <div class="form-group">
            <label>phonenumber</label>
            <input type="number" class="form-control" name="phonenumber" style="width:19em;" placeholder="Enter your phonenumber" value="<?php echo $phonenumber; ?>">
          </div>
          <div class="form-group">
            <label>Car_type</label>
            <input type="number" class="form-control" name="Car_type" style="width:20.5em;" required placeholder="Enter your Car type" value="<?php echo $Car_type; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>Hours</label>
            <input type="Hours" class="form-control" name="Hours" style="width:21em;" placeholder="Enter your Hours" value="<?php echo $Hours; ?>">
          </div><div class="form-group">
            <label>Old_user</label>
            <input type="text" class="form-control" name= "Old_user" style="width:20em;" required  placeholder="Enter your Old_user" value="<?php echo $Old_user; ?>">
          </div>
          <div class="form-group">
            <label>Car_wash</label>
            <input type="text" class="form-control" name="Car_wash" style="width:20em;" required  placeholder="Enter your Car_wash" value="<?php echo $Car_wash; ?>">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn" style="width:25em; margin:30; text-align: center " /><br><br>
            </div>
            <div class = "form-group">
            <input type="button" name="print" id="print" value="Print data" onclick="window.print();" />
           </center>
          </div>
        </form>
      </div>
<?php
      echo "Final amount: ";
      echo $result;
?>
    </center>
    </body>
   </html>

