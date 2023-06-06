<?php
// setcookie(name,value,expirt,path,domain,secure,httponly)
$cookie_name = "username";
$cookie_value = "Rutul Sheladiya";
setcookie($cookie_name,$cookie_value);
echo "<pre>";
print_r($_COOKIE);
// this cookie will expire after 30 second
// setcookie("password","hello@123",time()+(30),"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
      echo "Cookie " .$cookie_name ." Is Not Set";
    }else{
        echo "Cookie ".$cookie_name." Is Set.."."<br><br>";
        echo "Cookie Value ".$_COOKIE[$cookie_name];
    }
    //    echo $_COOKIE[$cookie_name];
    ?>
</body>
</html>