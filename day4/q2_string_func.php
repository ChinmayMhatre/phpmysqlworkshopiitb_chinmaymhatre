
<html lang="en">
<head>
   
    <title>string functions</title>
    
</head>
<body>
    <form action="" method="post"> 
    Enter a String 
    <input type="text" name="string">
    <br/>
    <input type="submit" value="submit">
    <?php
    $string = $_POST['string'] ;

            if(!empty($string)){  
                $String=$_POST['string'];
                $len =strlen($String);
                $split=str_split($String,1);
                $reverse=strrev($String);
                $lower=strtolower($String);
                $upper=strtoupper($String);
                $substring="nice";
                $replace=str_replace(" ","$substring","$String");
                echo "<br>The String entered is : " .$String;
                echo "<br/>";
                echo "1. Number of Characters are : ".$len;
                echo "<br/>";
                echo "2. String Split into array : ";
                print_r($split);
                echo "<br/>";
                echo "3. Reversed String : ".$reverse;
                echo "<br/>";
                echo "4. lower case : ".$lower;
                echo "<br/>";
                echo "5.  upper case : ".$upper;
                echo "<br/>";
                echo "6. Space is replaced with nice : ",$replace;
                }
                else echo "Input String";   

    
    ?>
    </form>

</body>
</html>