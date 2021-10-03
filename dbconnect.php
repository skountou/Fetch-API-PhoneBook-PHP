<?php
    //connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'phoneBook';

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Connection Failed  : '.mysql_error());    
    }
?>