<?php
        //Parameters to connect to a database
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname ="water_quality";

        //Connect to database
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if($conn){

        }else{
            die("Database connection failed!");
        }




    ?>