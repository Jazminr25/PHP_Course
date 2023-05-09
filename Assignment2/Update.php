<?php

$update = "UPDATE `CSIS2440`.`Player`";
 
    $update .= "WHERE (`FirstName` = '" . $fname . "')";
    $success = $con->query($update);
    if ($success == FALSE) {
        $failmess = "Whole query" . $update . "<br>";
        echo $failmess;
        die('Invalid query: ' . mysqli_error($con)); 
    } else {
        echo $name;
    }


