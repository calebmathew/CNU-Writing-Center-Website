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
            <table align='center'>
                <tr>
                    <th>Questions</th><th>Email Address</th>
                </tr>
                
                <?php 
                        $query = 'SELECT content, email FROM questions';
                        $run = $conn->query($query);
                        while($row = $run->fetch_assoc()) {
                            $content = $row['content'];
                            $email = $row['email'];
                                
                            echo "<tr>
                            <td align='center'>$content</td>
                            <td align='center'>$email</td>
                            </tr>";
                        }
                        $conn->close();
                ?>
                
            </table>
        </div>
    <footer>
        Copyright &copy; CNU Writing Center 2021
    </footer>
</body>
</html>