<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>file upload</title>
</head>
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit">
    </form>


<?php 

echo "<Br>".$_FILES["file"]["name"]."<Br>"; 
echo $_FILES["file"]["type"]."<Br>"; 
echo $_FILES["file"]["size"]."<Br>"; 

?>



</body>
</html>