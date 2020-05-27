<?php

$host = 'db';
$user = 'user';
$password = 'pass';
$db = 't_db';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error) {
	echo 'conn failed' . $conn->connect_error;
}else{
  echo "Successfully connected";
        $sql = "create table tutorial_inf(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
         if(mysqli_query($conn, $sql)){  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  
}


