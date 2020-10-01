<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>special variables</title>
</head>
<body>
<form method='GET' action="">
        <label for="side1">Side1:</label>
        <input type='number' name='side1' ><br/><br>
        <label for="side1">Side2:</label>
        <input type='number' name='side2' ><br /><br>
        <label for="side1">Side3:</label>
        <input type='number' name='side3' ><br /><br>
        <input type='submit' value='Submit' />
	</form>

	<?php
	if(isset($_GET['side1']) && isset($_GET['side1']) && isset($_GET['side1'])){
		$a =$_GET['side1'];
		$b =$_GET['side2'];
		$c =$_GET['side3'];
		
		if($a && $b && $c){
			if($a == $b && $b == $c){
				echo "Equilateral";
			}
			else if(($a != $b )|| ($b != $c) ||($b != $c)) {
				echo "Isoceles";
			}
			else if((($a**2+$b**2)==$c**2) || 
					(($c**2+$b**2)==$a**2) || 
					(($a**2+$c**2)==$b**2) ){
				echo "Right Angled";
			}
			else{
				echo "scalene";
			}
		}
	}
	else{
        echo "Please enter all sides";
    }
	?>
</body>
</html>



