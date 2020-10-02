
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action="q1.php" method='POST'>
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
            <input type='submit'  value='Submit'/>
    </form>    

    <?php
        $server = "localhost";
        $username="root";
        $password="";
        $dbname="result";
        $con = mysqli_connect($server,$username,$password,$dbname);
        if(!$con){
            die("Connection to database failed");
        }

        $name =$_POST['name'];
        $s1 =$_POST['sub1'];
        $s2 =$_POST['sub2'];
        $s3 =$_POST['sub3'];
        $s4 =$_POST['sub4'];
        $s5 =$_POST['sub5'];

        $sum = $s1 + $s2 + $s3 + $s4 + $s5;
        $percent = (float)($sum/500)*100;
        if($name && $s1 && $s2 && $s3 && $s4 && $s5){
                
                $query="INSERT INTO `class1` (`name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total_obtained`, `total_marks`, `percent`) VALUES ('$name', '$s1', '$s2', '$s3', '$s4', '$s5', '$sum', '500', '$percent');"   ;
                if($con->query($query) == true){
                    echo "$query sucessfully inserted";
                }else{
                    echo "error <br> $con->error ";
                }
        }
        $con->close();

               
          
       

      
        
        
        
        
        
         ?>
</body>
</html>

