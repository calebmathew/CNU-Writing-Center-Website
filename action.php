<?php
    /*include 'connect.php';*/
    
    $mysqli = mysqli_connect('cjm-capstonedb.c9glmfvid2ev.us-east-1.rds.amazonaws.com', 'CJM00948910', '1Eyeball', 'Capstone', '3306');

    if ($mysqli == false) {
        die("ERROR: Could not connect. " .mysqli_connect_error());
    }

    $content = mysqli_real_escape_string($mysqli, $_POST['content']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);

    $sql = "INSERT INTO questions (content, email) VALUES ('$content', '$email')";
    if (mysqli_query($mysqli, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not execute to $sql.".
    mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
?>