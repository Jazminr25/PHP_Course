
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Theme Simply Me: Jazmin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

      <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
              });
            } // End if
          });
        })
  </script>
  
  
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Me</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#1">WHO</a></li>
            <li><a href="#2">WHAT</a></li>
            <li><a href="#3">BIO</a></li>
            <li><a href="#4">SOCIAL LINKS</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assignments<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/Assignment1/PHPpage.php" target="_blank">Assignment 1</a></li>
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/Assignment2/MySQL.php" target="_blank">Assignment 2</a></li>
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/Assignment3/JavaScript_Validation.php" target="_blank">Assignment 3</a></li>
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/E-Commerce/index.php" target="_blank">E-Commerce Website</a></li>
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/CE01/CE01HelloWorld.php" target="_blank">Classroom Exercise 1</a></li>
                        <li><a href="http://ec2-35-163-253-219.us-west-2.compute.amazonaws.com/CSIS2440/Assignments/CE02/CE02RandomEvents.php" target="_blank">Classroom Exercise 2</a></li>
                    </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid bg-1 text-center" id="1">
      <h3 class="margin">WHO AM I?</h3>
      <img src="img/me.jpg" class="img-circle img-responsive margin" alt="Jazmin" onclick="sound();">
      <h3>JAZMIN RODRIGUEZ AREVALO</h3>
    </div>

    <div class="container-fluid bg-2 text-center" id="2">
      <h3 class="margin">WHAT AM I?</h3>
      <p>I am a student and artist.</p>
      <p>If you scroll down the page you can found out about four of my favorite things. They are skateboarding, music, videos, and art. Click on "Music" or on any picture of me to get a surprise. </p>
      <p>  </p>
      <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Search
      </a>
    </div>

    <div class="container-fluid bg-3 text-center" id="3">
      <h3 class="margin">BIO</h3>
      <p>I am a student at SLCC, it is my second year that I have attended. I am studying Computer Science. I am kind all over the place and like many things. I love music, art, and learning. One of my favorite books is Fahrenheit 451 by Ray Bradbury and one of my favorite films is Avator.</p>
      <div class="row">
        <div class="col-sm-4">
          <p>Skateboarding</p>
          <p>I have a YouTube channel that I have kind of forgot about, but most of the videos are about skateboarding. I learned to skateboard at age 8 because my cousins started to skateboard. I am not very good, but I can cruise. I have 2 skateboards, one longboard that I built, and two cruiser boards. I really like to skateboard because it teaches you to get up even when you fall really hard.</p>
          <img src="img/me1.jpg" class="img-responsive full-width-img margin" alt="Image" onclick="sound();">
        </div>
        <div class="col-sm-4">
          <p onclick="sound();">Music</p>
          <p>I have a mini studio in my room. I have 3 guitars, 2 keyboards (one is a MIDI), and a microphone. On one of the pictures,  you can see two of my guitars. I am currently working on an album. I have a deep love for music, especially Banda (Mexican music genre). I have written some songs, but most of them are in Spanish. The current album I am working on is going to be a English Pop Album. </p>
          <img src="img/me2.jpg" class="img-responsive full-width-img margin" alt="Image" onclick="sound();">
        </div>
        <div class="col-sm-4">
          <p>Videos</p>
          <p>Although I don't post on Youtube that often I am still working on videos currently. I love to make videos, especially if they make people laugh. One of the platforms I am very active is Tik Tok. I have over 50 videos. Most of the videos are lip syncs and more targeted to Spanish Speakers. Most videos are jokes. I don't really do many videos about art because they take a lot of time to make and edit. </p>
          <img src="img/me3.jpg" class="img-responsive full-width-img margin" alt="Image" onclick="sound();">
        </div>
        <div class="col-sm-4">
          <p>Art</p>
          <p>I love to draw and paint. I paint almost on everything. I sell my art too. Most orders are for potrait drawings, but I also customize clothing. Something I also consider art is makeup. I love colors especially if they are on my face.</p>
          <img src="img/me4.jpg" class="img-responsive full-width-img margin" alt="Image">
        </div>
      </div>
    </div>

    <div class="container-fluid bg-2 text-center" id="4">
      <h3 class="margin">WHERE TO FIND MORE ABOUT ME?</h3>
      <p>Instagram</p>
      <a href="https://www.instagram.com/pinche_jazminr/?utm_source=ig_profile_share&igshid=pgt0v03f2yds" target="_blank" class="btn btn-default btn-lg">
         <img src="img/instagram.png" alt="Instagram" width="50" height="50">
      </a>
      <p> </p>
      <p>Youtube</p>
      <a href="https://www.youtube.com/channel/UCYzzq-4uR8TXGLSx_RH5vXw" target="_blank" class="btn btn-default btn-lg">
         <img src="img/youtube.png" alt="Youtube" width="50" height="50">
      </a>
    </div>

    <footer class="container-fluid bg-4 text-center">
      <p class="glyphicon ">Copyright &#169; 2019 Jazmin Rodriguez Arevalo. All rights reserved.</p>
    </footer>

  </body>
</html>