<?php
        $server = "localhost";
        $username="root";
        $password="";
        $dbname="result";
        $con = mysqli_connect($server,$username,$password,$dbname);
        if(!$con){
            die("Connection to database failed");
        }
        echo "Connecting  to db"
    ?>