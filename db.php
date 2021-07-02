<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    // $con = mysqli_connect("localhost","root","","LoginSystem");
    // // Check connection
    // if (mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }
    $servername = "localhost";
                $username = "root";
                $password = "";
                
                // Create connection
                $con = new mysqli($servername, $username, $password);
                // Check connection
                if ($con->connect_error) {
                  die("Connection failed:");
                }
                
                // Create database
                $sql = "CREATE DATABASE LoginSystem";
                if ($con->query($sql) === TRUE) {
                  echo("");
                } else {
                  echo("");
                }
                mysqli_select_db($con, "LoginSystem");
                $query = "CREATE TABLE IF NOT EXISTS `users` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `username` varchar(50) NOT NULL,
                    `email` varchar(50) NOT NULL,
                    `password` varchar(50) NOT NULL,
                    `create_datetime` datetime NOT NULL,
                    PRIMARY KEY (`id`)
                   )";
                if ($con->query($query) === TRUE) {
                    echo ("");
                  } else {
                    echo ("");
                  }
?>
