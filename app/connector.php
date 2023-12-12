<?php
$connection = mysqli_init();
if(!$connection){
    die("mysqli_init failed");
}
mysqli_ssl_set($connection,"../client-key.pem","../client-cert.pem","../server-ca.pem",NULL,NULL)
$servername = "34.136.234.140";
$username = "root";
$password = "m-h(bHvY)_rO/_y4";
$database = "simpledb";

mysqli_real_connect($connection,$servername,$username,$password,$database);
if (!$connection) {
    die("Connection failed" . mysqli_connect_error());
}
?>
