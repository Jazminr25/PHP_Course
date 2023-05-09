<! DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hello World</title>
  </head>
  <body>
    <?php
    // I am setting up the variables.
    echo "<h2>This is a page about me</h2>";
    $name = "Jazmin Rodriguez Arevalo";
    $age = 19;
    $female = true;
    $icecream = "Jackfruit icecream";
    $hobbies = "drawing, painting, and making videos";
    ?>


    <hr>
    <?php
    print($name . ' <br> Who is($age);' . $age . ' and likes ' . $icecream . '. <br>');
    print("It is $female $name identifies as a female. She likes $hobbies. Here is a picture of me. <img src ='img/me.jpg' alt=''/>")
    /* I am using php to print out a short bio.
             * I also use php to display an image.
             */
    
    ?>       
  </body>
</html>
