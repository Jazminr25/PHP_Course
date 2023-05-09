<?php

require_once 'DataBaseConnection.php';

// function to print distance 
function PlanetDistance($x1, $y1, $z1, $x2, $y2, $z2) {
    $dist = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2) + pow($z2 - $z1, 2) * 1.0);
    return $dist;
}
//use Get to get variables

//Query first planet

//query second planet

//lets print everything out
$shipspeed = $_GET['speed'];
$planetID1 = $_GET['ID1'];
$planetID2 = $_GET['ID2'];

$sql1 = "SELECT * FROM CSIS2440.Planets where idPlanets = " . $planetID1;
$return = $con->query($sql1);
if (!$return) {
        $message = "Whole query" . $sql1;
        echo $message;
        die('Invalid query: ' . mysqli_error($con));
}

while ($row = $return->fetch_assoc()) {
    $pname1 = $row['PlanetName'];
    $x1 = $row['PosX'];
    $y1 = $row['PosY'];
    $z1 = $row['PosZ'];
    $desc1 = $row['PlanetDesc'];
    $faction1 = $row['Faction'];
    $active1 = $row['Active'];
}

$sql2 = "SELECT * FROM CSIS2440.Planets where idPlanets = " . $planetID2;
$return = $con->query($sql2);
if (!$return) {
        $message = "Whole query" . $sql2;
        echo $message;
        die('Invalid query: ' . mysqli_error($con));
}

while ($row = $return->fetch_assoc()) {
    $pname2 = $row['PlanetName'];
    $x2 = $row['PosX'];
    $y2 = $row['PosY'];
    $z2 = $row['PosZ'];
    $desc2 = $row['PlanetDesc'];
    $faction2 = $row['Faction'];
    $active2 = $row['Active'];
}

echo "<div class=\"row\"><div class=\"col-md-offset-1 col-md-5\"><table><th>Name</th>"
. "<th width='10%'>X,Y,Z</th><th>Description</th><th>Station</th>";
echo "<tr><td>" . $pname1
        . "</td><td>" . $x1 . " ," . $v1 . " ," . $z1
        . "</td><td>". $desc1
        . "</td><td>" . $active1 . "</td></tr>";
        echo "</table></div>";
        
 echo "<div class=\"col-md-5\"><table><th>Name</th>"
. "<th width='10%'>X,Y,Z</th><th>Description</th><th>Station</th>";
echo "<tr><td>" . $pname2
        . "</td><td>" . $x2 . " ," . $v2 . " ," . $z2
        . "</td><td>". $desc2
        . "</td><td>" . $active2 . "</td></tr>";
        echo "</table></div></div>";       

if($active1 !="N" && $active2 != "N"){
    print("<div class=\"col-xs-12\">Going from $pname1 to $pname2 will be a long trip.");
    $dist = PlanetDistance($x1, $y1, $z1, $x2, $y2, $z2);
    printf("<p>The distance is %.2f cycles</p></div></div>", ($dist / $shipspeed));
}else{
    print("<div class=\"col-xs-12\"><p>"
            . "One of the planets is not active, you cannot travel there.</p></div></div>");
}