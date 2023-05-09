<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//get variables
$CapName = htmlentities($_POST['CapName']);
$CapName = strtolower($CapName);
$CapName = ucwords($CapName);
$CapAge = $_POST['CapAge'];
$ShipName = $_POST['ShipName'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Captain Results Page</title>
        <!-- Custom fonts for this page -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        
        <!-- Theme CSS -->
        
        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .title{
            color:darkblue;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <?php
                        // put your code here
                        $pos = 0;
                        print("<p class='title'>Captain $CapName at the Age of $CapAge took over the ship $ShipName "
                                . "and here is some of their past</p>");
                        $EarlyFile = fopen('EarlyYears.txt', "r") or die("Unable to open file!");
                        while (!feof($EarlyFile)) {
                                
                                $randomEarly [$pos] = fgets($EarlyFile);
                                $pos++;
                                
                        }
                        fclose($EarlyFile);
                        //print_r($randomEarly);
                        shuffle($randomEarly);
                        print("<p>The early Career started with: <ul><li>" .
                                $randomEarly[0] . "</li><li>" . $randomEarly[1] . "</li></ul></p>");
                        
                        if ($CapAge > 25) {
                                $tours = 4 + ($CapAge - 26);
                        }else {
                                 $tours = floor(($CapAge - 17) / 2);
                        }
                         $randomTours = explode("/n", file_get_contents("Tours.txt"));
                         // print_r($randomTours);
                         shuffle($randomTours);
                         print("<p>The career looks like this <ul>");
                         for ($y = 0; $y < $tours; $y++) {
                                 print("<li>" . $randomTours[$y] . "</li>");
                         }
                         print("</ul></p>")
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
