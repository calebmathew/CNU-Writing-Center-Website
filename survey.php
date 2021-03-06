<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title> CNU Writing Center</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="capstone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".dropdown-toggle").dropdown();
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-light">
        <ul class="nav navbar-nav navbar-center">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="active"><a href="about.html">About Us</a></li>
            <li class="active"><a href="resources.html">Resources</a></li>
            <li class="active"><a href="events.html">Events</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Other
                <span class="caret"></span></a>
                <ul class ="dropdown-menu">
                    <li><a href="training.html">Consultant Training</a></li>
                    <li><a href="tidewater.html">Tidewater Community</a></li>
                    <li><a href="login.html">For Staff</a></li>
                </ul>
            </li>
        </ul>
        <a href="https://www.facebook.com/pg/cnuwritingcenter/about/" class="fa fa-facebook" style="float: right"></a>
        <a href="https://twitter.com/cnuwritingcntr?lang=en" class="fa fa-twitter" style="float: right"></a>
        <a href="https://www.instagram.com/cnuwritingcenter/?hl=en" class="fa fa-instagram" style="float: right"></a>
        <a href="index.php"><img src="pic6.jpeg" style="float: left" alt="CNU Logo" /></a>
    </nav>
    <header>
        <h1>Welcome to the Alice F. Randall Writing Center Webpage!</h1>
    </header>
    <div class="container">
<?php

if (isset($_POST['submit'])) {
    
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['content'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        
        $query = "INSERT INTO tidewater (fname, lname, email, content) VALUES ('$fname', '$lname', '$email', '$content')";
        
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
        echo "Please fill out all required fields";
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