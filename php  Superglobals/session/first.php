<?php
session_start();
$_SESSION['Name'] = "Rutul Sheladiya";
$_SESSION['Age'] = 22;
$_SESSION['City'] = "Surat";
echo "Session is set...";
echo session_id();
echo "<pre>";
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <br><br>
    <a href="second.php">go to second page</a>
</body>
</html>