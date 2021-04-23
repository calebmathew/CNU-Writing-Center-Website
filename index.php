<!DOCTYPE html>
<html lang='en'>
<head>
    <title> CNU Writing Center</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="capstone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <h2>Welcome to the Alice F. Randall Writing Center!</h2>
    </header>
    <main>
        <div class="container">
            <p>Free, friendly writing assistance in all subjects and disciplines, for CNU student-writers of all levels. At the Alice F. Randall Writing Center, we help you better your writing through engaged conversation!</p>
        </div>
        <br>
        <div class="container">
            <br>
            <div class="w3-content w3-display-container">
            <img class="mySlides" src="pic1.jpg" style="width:100%">
            <img class="mySlides" src="pic2.jpg" style="width:100%">
            <img class="mySlides" src="pic3.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <br>
        </div>
        <script src="slider.js"></script>
        <br>
        <div class="container">
            <h4>Make an appointment</h4>
                <p>For in-person appointments, please click <a href="https://www.google.com/calendar/selfsched?sstoken=UUFQMVJKVGJla1JGfGRlZmF1bHR8YWE1NDRkODk4NmE2OGY2YTgyMzQ1MmFkYmU1MTkwMTE"><strong>here.</strong></a><p>
                <p>For online synchronus appointments, please click <a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=UUdSZ0lXU20wX2hsfGRlZmF1bHR8NTYzYzQxMjk4NDMzY2FlNmI4ZGM4ODJmNjNkODY1YmQ"><strong>here.</strong></a></p>
                <p>For asynchronous appointments, please click <a href="https://forms.gle/gqTq4Yq4cBMbFYVF6"><strong>here.</strong></a></p>
        <br>
        </div>
        <br>
        <div class="container">
            <h4>Fall 2021 Writing Support</h4>
            <p>The Alice F. Randall Writing Center will offer three appointment options to best meet the needs of all CNU students. These are:</p>
            <dl>
                <dt>45-minute in-person appointments</dt>
                    <dd>Christopher Newport Hall, Suite 124</dd>
                <dt>60-minute online synchronous appointment</dt>
                    <dd>Google Meet</dd>
                <dt>Asynchronous appointments, where consultants spend up to 90 minutes reading and providing written feedback for students</dt>
            </dl>
        </div>
        <br>
        <div class="container">
            <h4>Fall 2021 Hours</h4>
            <p>Hours may vary, but generally all in-person and online synchronous appointments are offered during the following times:</p>
            <dl>
                <dt>Mondays - Thursdays</dt>
                    <dd>10am - 8pm</dd>
                <dt>Fridays</dt>
                    <dd>10am - 3pm</dd>
                <dt>Asynchronous appointments taken 7 days/week</dt>
            </dl>
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