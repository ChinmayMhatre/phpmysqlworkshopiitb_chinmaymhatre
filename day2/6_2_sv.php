
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>special varables</title>
</head>
<body>

<form action="" method='POST'>
    <label for="name">Name :</label>
	<input type='text' name='name' ><br/><br>
    <h3>Marks in each Subject (out of 100)</h3><br>
        <label for="sub1">Subject 1:</label>
        <input type='number' name='sub1' ><br/><br>
        <label for="sub2">Subject 2:</label>
        <input type='number' name='sub2' ><br /><br>
        <label for="sub3">Subject 3:</label>
        <input type='number' name='sub3' ><br /><br>
        <label for="sub4">Subject 4:</label>
        <input type='number' name='sub4' ><br /><br>
        <label for="sub5">Subject 5:</label>
        <input type='number' name='sub5' ><br /><br>
        <input type='submit' value='Submit'/>
	</form>

<?php
    if(isset($_POST['name']) 
    &&  isset($_POST['sub1']) 
    && isset($_POST['sub2']) 
    && isset($_POST['sub3']) 
    && isset($_POST['sub4']) 
    && isset($_POST['sub5'])){

        $name = $_POST['name'];
        $s1 =$_POST['sub1'];
        $s2 =$_POST['sub2'];
        $s3 =$_POST['sub3'];
        $s4 =$_POST['sub4'];
        $s5 =$_POST['sub5'];

        $sum = $s1 + $s2 + $s3 + $s4 + $s5;
        $percent = ($sum/500)*100;
        echo "
            <h1>Report</h1>
            <p>Name:$name</p>
            <p>Marks Obtained:$sum / 500</p>
            <p>Percentage: $percent%</p>
        ";
    }
    else{
        echo "A field was left empty";
    }
?>

    
</body>
</html>



