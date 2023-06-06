<?php
if(isset($_POST['submit'])){
   echo "<pre>";
   print_r($_FILES['img']);


// echo "<pre>";
// print_r($imageName)."<br>";

// $fullPath = $_FILES['img']['full_path'];
// print_r($fullPath)."<br>";

// $imagetype = $_FILES['img']['type'];
// print_r($imagetype)."<br>";

$tmpName = $_FILES['img']['tmp_name'];
// print_r($tmpName)."<br>";

// $imageSize = $_FILES['img']['size'];
// print_r($imageSize)."<br>";

$totalCount = count($_FILES['img']['name']);
echo $totalCount;
$folder = "./uploadMultiple/";

for ($i = 0; $i <$totalCount; $i++){
    $imageName = time() . $_FILES['img']['name'][$i];
    move_uploaded_file($tmpName[$i],$folder.$imageName);
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiple Image</title>
</head>
<body>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="img[]" multiple> <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>