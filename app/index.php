<?php
include "connector.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Google Cloud DB</title>
</head>
<body>
    <h1>Testing site for google cloud db</h1>
    <form action="controller.php" method="POST">
        <input type="text" name="username" id="username">
        <input type="text" name="passwordz" id="passwordz">
        <button type="submit" name="submit" value="asd">Submit</button>
    </form>
</body>
<?php
mysqli_close($connection);
?>
</html>