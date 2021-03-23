<!DOCTYPE html>
<html lang='en'>
<body>
<?php
$mysqli = mysqli_connect('cjm-capstonedb.c9glmfvid2ev.us-east-1.rds.amazonaws.com', 'CJM00948910', '1Eyeball', 'Capstone', '3306');

if ($mysqli->connect_error) {
    die('connection failed: ' .$mysqli->connect_error);
}
else {
    echo 'connected successfully';
    mysqli_close($mysqli);
}
?>
</body>
</html>