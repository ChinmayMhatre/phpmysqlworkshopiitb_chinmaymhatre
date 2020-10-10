<!DOCTYPE html>
<html>
<head>
	<title>md5</title>
</head>
<body>
<form action="" method="POST">
	<p>
		Username: 
		<input type="text" name="username"><br>
	</p>
	<p>
		Password: 
		<input type="password" name="password"><br>
	</p>
	<input type="submit" name="submit"><br>
<?php 
$con = mysqli_connect("localhost","root","","result");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$passwordenc = md5($password);

$sql="INSERT INTO data1 (username, password) VALUES ('$username', '$passwordenc')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 

mysqli_close($con);

?>
</form>
</body>
</html>