<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "lab_9_and_10"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 