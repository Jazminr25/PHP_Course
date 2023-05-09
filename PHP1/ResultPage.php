<!DOCTYPE html>
<?php
$Hero = htmlentities($_POST['HeroName']);
$Hero = strtolower($Hero);
$Hero = ucwords($Hero);
$race = $_POST['Race'];
$Class = $_POST['Class'];
$Age = $_POST['Age'];
$gender = $_POST['gender'];
$kingdom = $_POST['KingdomName'];

$RaceArray = explode("}", file_get_contents("RaceInfo.txt"));
$ClassArray = explode("}", file_get_contents("ClassInfo.txt"));

$img = "<img src='images/";
$info = "<header class='text-center'><h4>" . $Hero . " from " . $kingdom 
        . "</h4><b>" . $race ." " . $Class . "</b> At the age of ". $Age . "</header>";

        

 switch ($race){
    case "Human" :
        $img .= "Hu";
        $info = $info . $RaceArray[0];
        break;
    case "Elf" :
        $img = $img . "El";
        $info = $info . $RaceArray[1];
        break;
    case "Dwarf" :
        $img = $img . "Dw";
        $info = $info . $RaceArray[2];
        break;
    case "Halflings" :
        $img = $img . "Ha";
        $info = $info . $RaceArray[3];
        break;
    default:
        echo "There is an error with the race.";    
}

switch ($Class){
    case "Fighter" :
        $img = $img . "Fi";
        $info = $info . $ClassArray[0];
        break;
    case "Cleric" :
        $img = $img . "Cl";
        $info = $info . $ClassArray[1];
        break;
    case "Magic User" :
        $img = $img . "Ma";
        $info = $info . $ClassArray[2];
        break;
    default:
        echo "There is an error with the class";
}

If($gender == "Male"){
        $img = $img . "Ma.jpg' alt='' >";
    
}else {
        $img = $img . "Fe.jpg' alt='' >";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                height: 250px;
                padding: 3pt;
            }
            p{
                margin-left: 8px;
            }
        </style>
    </head>

    <body>
        <div id="CharacterSheet" class="container">
            <div class="row">
                <h3 class="Content">The Brave Adventurer</h3>
            </div>
            <div class="row">
                 <div class="col-md-3">
                    <?php
                    //print random stats here
                    $Stats = ["Str", "Con", "Dex", "Wis", "Int", "Cha"];
                            for($s = 0; $s < 6; $s++ ){
                            print($Stats[$s] . ": " . rand(3,18) . "<br>");
                            }
                    /* $Str = rand(3,18);
                    $Con = rand(3,18);
                    $Dex = rand(3,18);
                    $Wis = rand(3,18);
                    $Int = rand(3,18);
                    $Cha = rand(3,18);

                    print("<p>Str: " . $Str . "<br> Con: " . $Con 
                            . "<br> Dex: " . $Dex . "<br> Wis: " . $Wis
                            . "<br> Int: " . $Int . "<br> Cha: " . $Cha . "</p>"); */
                    ?>
                </div>
                <div class="col-md-5">
                    <?php
                   //print character info here
                    print($info);
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    //print image here
                    print($img);
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
