<?php

    $insert = "INSERT INTO `CSIS2440`.`Players` (`FirstName`, `LastName`, `Birthdate`, `Email`, `ThePass`) "
            . "VALUES ('" . $fname . "', '" . $lname . "', '"  . $birthdate . "', '" . $email . "', '" . $password . "')";

    $success = $con->query($insert);

if ($success == FALSE) {
        $failmess = "Whole query" . $insert . "<br>";
        echo $failmess;
        print('Invalid query: ' . mysqli_error($con) . "<br>");
    } else {
        echo $fname . " was added<br>";
    }

