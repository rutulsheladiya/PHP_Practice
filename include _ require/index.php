<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'header.php';
    // include 'header.php';
    // include 'header.php';
    // include 'header.php';

    // include_once 'header.php';
    // include_once 'header.php';
    // include_once 'header.php';
    // include_once 'header.php';

    ?>
    <section style="display: flex;">
        <div>
            <h3>Hello Everyone This is main page.</h3>
        </div>
        <div style="padding-left:40px">
            <?php
            include 'sidebar.php';
            ?>
        </div>
    </section>
    <?php
     include 'footer.php';
    ?>
</body>

</html>