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
        <img src="pic6.jpeg" style="float: left" alt="CNU Logo" />
    </nav>
    <main>
        <p>Welcome back, <?=$_SESSION['name']?>!</p>
    </main>
        <div class="container">
                <?php 
                        $sql = 'SELECT content, email FROM questions';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table cellspacing='15'>";
                                echo "<tr>";
                                    echo "<th>Content</th>";
                                    echo "<th>Email</th>";
                                echo "<tr>";
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                    echo "<td>" . $row['content'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else{
                            echo "0 results";
                        }
                ?>
        </div>
        <br>
        <div class="container">
            <p>Tidewater Survey</p>
            <?php 
                    $sql2 = 'SELECT fname, lname, email, content FROM tidewater';
                    $result2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($result2) > 0) {
                        echo "<table cellspacing='15'>";
                            echo "<tr>";
                                echo "<th>Firstname</th>";
                                echo "<th>Lastname</th>";
                                echo "<th>Email</th>";
                                echo "<th>Content</th>";
                            echo "<tr>";
                        while($row2 = mysqli_fetch_array($result2)) {
                            echo "<tr>";
                                echo "<td>" . $row2['fname'] . "</td>";
                                echo "<td>" . $row2['lname'] . "</td>";
                                echo "<td>" . $row2['email'] . "</td>";
                                echo "<td>" . $row2['content'] . "</td>";
                            echo "<tr>";
                        }
                        echo "</table>";
                    } else {
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