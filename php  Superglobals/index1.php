<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="senddata.php?id=10&name='ravi'" method="GET">
        <div>
            <label for="">Id</label>
            <input type="text" name="id" placeholder="Enter Id">
        </div>
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>