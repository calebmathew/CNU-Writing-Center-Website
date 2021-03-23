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
        <img src="pic5.png" width="125" height="70" style="float: left" alt="CNU Logo" />
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
    <main>
        <div class="container">
        <img src="pic4.jpg" class="center" alt="Alice F. Randall" />
        <ul>
            <br>
            <li><a href="https://www.google.com/calendar/selfsched?sstoken=UUFQMVJKVGJla1JGfGRlZmF1bHR8YWE1NDRkODk4NmE2OGY2YTgyMzQ1MmFkYmU1MTkwMTE" class="badge badge-inperson">Schedule an in-person appointment</a></li>
            <li><a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=UUdSZ0lXU20wX2hsfGRlZmF1bHR8NTYzYzQxMjk4NDMzY2FlNmI4ZGM4ODJmNjNkODY1YmQ" class="badge badge-synchronous">Schedule a synchronous online appointment</a></li>
            <li><a href="https://forms.gle/gqTq4Yq4cBMbFYVF6" class="badge badge-asynchronous">Schedule an asynchronous online appointment</a></li>
            <br>
        </ul>
        </div>
        <br>
        <section class="call-to-action">
        <div class="container">
        <form action="insert.php" method="post">
            <br>
            <label for='text'>Quick question? Ask Us!</label><br>
            <input type='text' name='content' size="35"><br>
            <label for='email'>E-mail Address:</label><br>
            <input type='email' name='email'><br><br>
            <button type='submit' name='submit'>Submit</button>
            <br><br>
        </form>
        </div>
        </section>
    </main>
    <br>
    <footer>
        Copyright &copy; CNU Writing Center 2021
    </footer>
</body>
</html>
