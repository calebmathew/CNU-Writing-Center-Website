<?php include 'connect.php'; ?>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title> CNU Writing Center</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="capstone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <nav>
        <img src="images/pic5.png" width="145" height="60" style="float: left" alt="CNU Logo" />
        <ul>
            <li><a href="index.php">Home</a></li>
		    <li><a href="about.html">About Us</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="training.html">Consultant Training</a></li>
            <li><a href="tidewater.html">Events</a></li>
            <li><a href="login.php">For Staff</a></li>
        </ul>
    </nav>
     <header>
        <h2>For Staff</h2>
    </header>
    <main>
        <p>Welcome back, <?=$_SESSION['name']?>!</p>
    </main>
        <div class="container">
                <?php 
                        $sql = 'SELECT content, email FROM questions';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "Content: " . $row['content'] . "Email:" . $row['email'] . "<br>";
                            }
                        } else{
                            echo "0 results";
                        }
                        mysqli_close($conn);
                ?>
        </div>
    <footer>
        Copyright &copy; CNU Writing Center 2021
    </footer>
</body>
</html>