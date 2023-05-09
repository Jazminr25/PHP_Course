<?php

require_once 'DataBaseConnection.php';
$infonum = $_GET['info'];
if ($infonum > 0) {
    $sql = "SELECT Name, Price, Description FROM CSIS2440.Products WHERE ProductID = " . $infonum;
    echo "<br><table align='left' width='80%'><tr><th>Name</th><th>Price</th><th>Description</th></tr>";
    $result = $con->query($sql);

    if (mysqli_num_rows($result) > 0) {
        list($infoname, $infoprice, $infodesc) = mysqli_fetch_row($result);
        echo "<tr>";
        
        echo "<td align=\"left\" width=\"250px\">$infoname</td>";
        echo "<td align=\"left\" width=\"125px\">" . money_format('%(#8n', $infoprice) . "</td>";
        echo "<td align=\"center\">$infodesc</td>";
        echo "</tr>";
    }
    echo "</table>";
}