<!-- this function will remove the html , php and javascript code from the string. -->
<?php
// $user_input = "Your site rocks";

// echo "<h4>My Commenting System</h4>";

// echo $user_input;

// ===============================================================


$user_input = "
// <script>
// alert('Your site sucks!');
// </script>
// ";

// echo "<h4>My Commenting System</h4>";

// echo $user_input;// 


// ===============================================================

// Let’s now secure our application from such attacks using strip_tags function.
// remove the javascript code from the string
$user_input = "
<script>
alert('Your site sucks!');
</script>
";

echo strip_tags($user_input);

echo "<br><br><hr><br>";

$name = "<b>Rutul</b> <i>Sheladiya</i>";
echo $name;

// let's remove the html code from string

echo "<br><br>"."Remove Html tag from the string : ".strip_tags($name);


// accept some html tage and remove some tag
echo "<br><br>"."Accept some Html tag And remove some html tag : ".strip_tags($name,"<b>");
?>