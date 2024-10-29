<?php 
    $servername = "localhost";
    $user = "root";
    $pass = ""; //diisi sesuai password 
    $dbname = "website_experience";
    
    $conn = new mysqli($servername, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed : " . $conn->connect_error); 
    }
?>
