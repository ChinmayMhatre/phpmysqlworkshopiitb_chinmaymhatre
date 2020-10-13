<?php
require("connect.php");
session_start();
$success=$error="";
$current_id=$_GET['_id'];
$mail=$_SESSION['mail'];     
$select = "Select * FROM marks,students where marks.student_id='$current_id' AND students.id='$current_id'"; 
$result = mysqli_query($conn, $select);
 
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_array($result)) {
           $name=$row['name'];
          $email=$row['email'];
          $subject1=$row["sub1"];
          $subject2=$row["sub2"];
          $subject3=$row["sub3"];
        //   $totalobtained=$subject1 + $subject2 + $subject3;
        //   $percentage=($totalobtained / 300 )*100;       
      }      
  }
  else echo "Error";


  if(isset($_POST['submit']))
  {
  $name = (isset($_POST['name']) ? $_POST['name'] : null);
  $email = (isset($_POST['email']) ? $_POST['email'] : null);
  $Subject1 = (isset($_POST['Sub1']) ? $_POST['Sub1'] : null);
  $Subject2 = (isset($_POST['Sub2']) ? $_POST['Sub2'] : null);
  $Subject3 = (isset($_POST['Sub3']) ? $_POST['Sub3'] : null);
  
  if(!empty($name || $Subject1 || $Subject2 || $Subject3 || $email))
  {   
      if(is_numeric($Subject1) && is_numeric($Subject2) && is_numeric($Subject3) &&  $Subject1<=100 && $Subject2<=100 && $Subject3<=100)
      { 
          $totalobtained = $Subject1 + $Subject2 + $Subject3;
          $percentage = ($totalobtained / 300) * 100 ; 
          $sql = "UPDATE marks SET sub1=$Subject1,sub2=$Subject2,sub3=$Subject3,totalobtained=$totalobtained,percentage=$percentage WHERE student_id='$current_id'";
          
          if (mysqli_query($conn, $sql)) {             
              header("Location : edit.php");
          } else {
              echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
          mysqli_close($conn);
      }    
      else{
          echo "Enter Numeric Values less than 100 for The Subject Marks";
      }
  }
  else
  {
      echo "Please Enter all the values";
  }
  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    input{
        margin: 5px;
        }
    #submit{
        margin: 0 auto;
    }    
        </style>
</head>
<body>
    <h1 style="text-align: center;">Update Form</h1>
        <form action="" method="post">
        Username <input type="text" name="name" value="<?php echo $name?>"required>
        <br>
        Email <input type="email" name="email" value="<?php echo $email ?>" required>
        <br>
        HTML <input type="text" name="Sub1" value="<?php echo $subject1 ?>" required>
        <br>
        PHP <input type="text" name="Sub2" value="<?php echo $subject2 ?>" required>
        <br>
        MYSQL <input type="text" name="Sub3" value="<?php echo $subject3 ?>" required>
        <br>
        <input type="submit" name="submit" id="submit">
        </form>
      <h3 style="text-align: center;"><?php echo $success; echo $error; ?></h3>  
            
</body>
</html>