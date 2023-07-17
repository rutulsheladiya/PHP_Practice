<?php
    session_start();
    echo $_POST['email'];
    echo $_POST['name'];
    if(isset($_POST['email'])) {
        // echo $_POST['email'];
       $_SESSION['email'] = $_POST['email'];
    }
?>