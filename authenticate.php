<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> CNU Writing Center</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="capstone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <img src="images/pic5.png" width="145" height="60" style="float: left" alt="CNU Logo" />
        <a href="https://www.facebook.com/pg/cnuwritingcenter/about/" class="fa fa-facebook" style="float: right"></a>
        <a href="https://twitter.com/cnuwritingcntr?lang=en" class="fa fa-twitter" style="float: right"></a>
        <a href="https://www.instagram.com/cnuwritingcenter/?hl=en" class="fa fa-instagram" style="float: right"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
		    <li><a href="about.html">About Us</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="training.html">Consultant Training</a></li>
            <li><a href="tidewater.html">Events</a></li>
        </ul>
    </nav>
    <div class="container">
<?php
        
if ( !isset($_POST['username'], $_POST['password'])) {
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
        echo 'Welcome ' . $_SESSION['name'] . '!';
        // header('Location: staff.php');
    } else {
        echo 'Incorrect username and/or password';
    }
} else {
    echo 'Incorrect username and/or password';
}
    
    $stmt->close();
}
?>

    </div>
    <footer>
        Copyright &copy; CNU Writing Center 2021
    </footer>
</body>
</html>