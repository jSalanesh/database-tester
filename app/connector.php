<?php
$servername = "34.136.234.140";
$username = "root";
$password = "m-h(bHvY)_rO/_y4";
$database = "simpledb";

$connection = mysqli_connect($servername,$username,$password,$database);
if (!$connection) {
    die("Connection failed" . mysqli_connect_error());
}
?>
