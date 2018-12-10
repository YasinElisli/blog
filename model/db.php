<?php 
//db-e qosulma
$db = new mysqli("localhost","root","","blog");
$db->set_charset("utf8");

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



 ?>