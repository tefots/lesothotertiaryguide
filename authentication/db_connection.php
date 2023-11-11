<?php
//database variables
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "institutions";

$connector = mysqli_connect($servername, $username, $password, $database_name);

//checking connection
 if($connector->connect_error)die($connector->connect_error);


