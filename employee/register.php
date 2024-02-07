<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image/background/11.jpg">

  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('error.php'); ?>
    <div class="input-group">
      <label>ent_time</label>
      <input type="time" name="ent_time" value="<?php echo $ent_time; ?>">
    </div>
    <div class="input-group">
      <label>ext_time</label>
      <input type="time" name="ext_time" value="<?php echo $ext_time; ?>">
    </div>
     <div class="input-group">
      <label>Employee_Name</label>
      <input type="text" name="Employee_Name" value="<?php echo $Employee_Name; ?>">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <div class = "form-group">
            <input type="button" name="print" id="print" value="Print data" onclick="window.print();" />
    </div>
  </form>
</body>
</html>