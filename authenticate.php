<!DOCTYPE html>
<html lang="en">
<body>
<?php
$conn = mysqli_connect('capstonedb.cdnfxstrm4ai.us-east-1.rds.amazonaws.com', 'CJM00948910', 'captains321', 'Capstone', '3306');
/* $conn = mysqli_connect('host', 'username', 'password', 'port') */
    
if ( !isset($_POST['username'], $_POST['password']) ) {
    exit('Please fill both the username and password fields');
}
    
if ($stmt = $conn->prepare('SELECT id, password FROM account WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();
    
    if ($_POST['password'] === $password) {
        
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header('Location: staff.php');
    } else {
        echo 'Incorrect username and/or password';
    }
} else {
    echo 'Incorrect username and/or password';
}
    
    $stmt->close();
}
?>
</body>
</html>