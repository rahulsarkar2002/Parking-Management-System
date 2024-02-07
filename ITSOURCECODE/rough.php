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
            <label>Expenses_Name1</label>
            <input type="text" class="form-control" name="Expenses_Name1" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
          <div class="form-group">
            <label>Amount1</label>
            <input type="number" class="form-control" name="Amount1" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
             <label>Expenses_Name2</label>
            <input type="text" class="form-control" name="Expenses_Name2" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
          <div class="form-group">
            <label>Amount2</label>
            <input type="number" class="form-control" name="Amount2" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>   <label>Expenses_Name3</label>
            <input type="text" class="form-control" name="Expenses_Name3" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
          <div class="form-group">
            <label>Amount3</label>
            <input type="number" class="form-control" name="Amount3" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>   <label>Expenses_Name4</label>
            <input type="text" class="form-control" name="Expenses_Name4" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
          <div class="form-group">
            <label>Amount4</label>
            <input type="number" class="form-control" name="Amount4" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>   <label>Expenses_Name5</label>
            <input type="text" class="form-control" name="Expenses_Name5" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
          <div class="form-group">
            <label>Amount5</label>
            <input type="number" class="form-control" name="Amount5" style="width:20em;" placeholder="Enter the name of the expense" required />
          </div>
            
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:25em; margin:30;" /><br><br>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
        include('connection1.php');
        if(isset($_POST['submit'])){
          $Expenses_Name1 = $_POST['Expenses_Name1'];
          $Amount1 = $_POST['Amount1'];
          $Expenses_Name2 = $_POST['Expenses_Name2'];
          $Amount2 = $_POST['Amount2'];
          $Expenses_Name3 = $_POST['Expenses_Name3'];
          $Amount3 = $_POST['Amount3']; 
          $Expenses_Name4 = $_POST['Expenses_Name4'];
          $Amount4 = $_POST['Amount4'];
          $Expenses_Name5 = $_POST['Expenses_Name5'];
          $Amount5 = $_POST['Amount5'];
          $new1 = array($Expenses_Name1,$Expenses_Name2,$Expenses_Name3,$Expenses_Name4,$Expenses_Name5);
          $new2 = array($Amount1,$Amount2,$Amount3,$Amount4,$Amount5);
          $totalexpense = $Amount1 + $Amount2 + $Amount3 + $Amount4 + $Amount5 ; 
          print_r("History of the data submitted");
          print_r("</br>");
          print_r(".................................................");
          print_r("</br>");
          print_r("</br>");
          for ($i=0; $i < 5; $i++) { 
          print_r('Expense Name = ');
          print_r($new1[$i] );
          print_r(' -> Amount = ');
          print_r($new2[$i] );
          echo "</br>"; 
        }
         print_r('Total expense =');
          print_r($totalexpense);
            $query = "INSERT INTO user
                (Expenses_Name1, Amount1, Expenses_Name2, Amount2, Expenses_Name3, Amount3, Expenses_Name4, Amount4, Expenses_Name5, Amount5, totalexpense )
                VALUES ('$Expenses_Name1','$Amount1','$Expenses_Name2','$Amount2','$Expenses_Name3','$Amount3','$Expenses_Name4','$Amount4','$Expenses_Name5','$Amount5','$totalexpense')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                
      }
      ?>
