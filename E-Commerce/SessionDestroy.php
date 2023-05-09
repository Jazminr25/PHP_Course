<?php
session_start();
session_destroy();
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "You have been logged out. Bye<br><br>";
        ?>
        <a class="button" href="LoginPage.php">Go to Login Page</a>
    </body>
</html>
