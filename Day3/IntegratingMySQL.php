<html>
    <body>
        <?php
        //Integratin DB connection MYSQL in php

        //Establish Connection

        $server_name = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student_db";

        $conn = mysqli_connect($server_name,$username,$password,$dbname);
        if(!$conn){
            die("Connection failed" . mysqli_connect-error());
        }
        else{
            echo"Connection Successful !!";
        }

        $name = $POSt['name'];
        $mobile = $POST['mobile'];
        $email = $POST['email'];

        $sql insert = "INSERT INTO php_session (name,mobile,email)VALUES ($name,$mobile,$email)";

        if (mysqli_query
        
        
        )