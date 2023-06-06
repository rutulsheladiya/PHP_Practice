<?php
if(isset($_POST['submit'])){
//     echo "<pre>";
//    print_r($_FILES['img']['name']);

$imageName = $_FILES['img']['name'];
echo $imageName."<br>";

$fullPath = $_FILES['img']['full_path'];
echo $fullPath."<br>";

$imagetype = $_FILES['img']['type'];
echo $imagetype."<br>";

$tmpName = $_FILES['img']['tmp_name'];
echo $tmpName."<br>";

$imageSize = $_FILES['img']['size'];
echo $imageSize."<br>";

$folder = "./upload/".$imageName;
// store unique name in folder
$folder = "./upload/".time();

move_uploaded_file($tmpName,$folder);
}


// used to delete the image from folder
//unlink("./upload/1.jpeg");
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
    <section>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="img"><br>
            <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </section>

</body>
</html>