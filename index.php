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
    <style>
        .mySlides {display:none;}
    </style>
</head>
<body>
    <nav>
        <img src="images/pic5.png" style="float: left" alt="CNU Logo" />
            
        <a href="https://www.facebook.com/pg/cnuwritingcenter/about/" class="fa fa-facebook" style="float: right"></a>
        <a href="https://twitter.com/cnuwritingcntr?lang=en" class="fa fa-twitter" style="float: right"></a>
        <a href="https://www.instagram.com/cnuwritingcenter/?hl=en" class="fa fa-instagram" style="float: right"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
		    <li><a href="about.html">About Us</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="training.html">Training</a></li>
            <li><a href="tidewater.html">Events</a></li>
        </ul>
    </nav>
    <header>
        <h1>Welcome to the Alice F. Randall Writing Center Webpage!</h1>
    </header>
    <main>
        <div class="container">
            <br>
            <div class="w3-content w3-display-container">
            <img class="mySlides" src="images/pic1.jpg" style="width:100%">
            <img class="mySlides" src="images/pic2.jpg" style="width:100%">
            <img class="mySlides" src="images/pic3.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <br>
        </div>
        <br>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
        <div class="container">
            <ul>
            <br>
                <li><a href="https://www.google.com/calendar/selfsched?sstoken=UUFQMVJKVGJla1JGfGRlZmF1bHR8YWE1NDRkODk4NmE2OGY2YTgyMzQ1MmFkYmU1MTkwMTE" class="badge badge-inperson">Schedule an in-person appointment</a></li>
                <li><a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=UUdSZ0lXU20wX2hsfGRlZmF1bHR8NTYzYzQxMjk4NDMzY2FlNmI4ZGM4ODJmNjNkODY1YmQ" class="badge badge-synchronous">Schedule a synchronous online appointment</a></li>
                <li><a href="https://forms.gle/gqTq4Yq4cBMbFYVF6" class="badge badge-asynchronous">Schedule an asynchronous online appointment</a></li>
            <br>
            </ul>
        </div>
        <br>
        <div class="container">
            <h4>Location</h4>
            <h4>Hours</h4>
        </div>
        <br>
        <div class="container">
            <h3>Mission Statement</h3>
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
