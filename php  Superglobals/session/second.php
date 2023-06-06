<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Name : <?php echo $_SESSION['Name'] ?></h3>
    <h3>Age : <?php echo $_SESSION['Age'] ?></h3>
    <h3>City : <?php echo $_SESSION['City'] ?></h3>

    <a href="logout.php">logout</a>
    <br><br>
    <a href="first.php">Home page</a>
</body>
</html>