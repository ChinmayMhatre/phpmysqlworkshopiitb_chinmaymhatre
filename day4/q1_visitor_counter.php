<?php


$server = "localhost";
$username="root";
$password="";
$dbname="result";
$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("Connection to database failed");
}


$rec = "SELECT * FROM `counter` WHERE id='1'";
$res = $con->query($rec);


if ($res->num_rows > 0) {
while($row = $res->fetch_assoc()) {
    $count = $row['count'];
    echo "the count is " . $count;

    $update = "UPDATE `counter` SET count=count+1 WHERE id='1'";
    if ($con->query($update) === TRUE) {
           
    } else {
            echo "Error : " . $con->error;
    }

}
}else{
    echo"no result";
}

?>