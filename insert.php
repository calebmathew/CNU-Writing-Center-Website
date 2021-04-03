<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title> CNU Writing Center</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="capstone.css" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="images/pic5.png" width="145" height="60" style="float: left" alt="CNU Logo" />
        <ul>
            <li><a href="index.php">Home</a></li>
		    <li><a href="about.html">About Us</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="training.html">Consultant Training</a></li>
            <li><a href="tidewater.html">Tidewater Community Writing Center</a></li>
        </ul>
    </nav>
    <header>
        <h1>Welcome to the Alice F. Randall Writing Center Webpage!</h1>
    </header>
    <div class="container">
<?php

if (isset($_POST['submit'])) {
    
    if (!empty($_POST['content']) && !empty($_POST['email'])) {
        
        $content = $_POST['content'];
        $email = $_POST['email'];
        
        $query = "insert into questions (content, email) values('$content', '$email')";
        
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        
        if($run) {
            echo "form submitted successfully";
            mysqli_close($conn);
        }
        else {
            echo "Form not submitted";
        }
    }
    else {
        echo "all fields required";
        mysqli_close($conn);
    }
}

?>
    </div>
    <footer>
        Copyright &copy; CNU Writing Center 2021
    </footer>
</body>
</html>