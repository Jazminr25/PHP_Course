<?php

session_start();
unset($_SESSION['badPass']);
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
require_once 'DataBaseConnection.php';

$myusername = mysql_fix_string($con, $myusername);
$mypassword = mysql_fix_string($con, $mypassword);

$Hashed = hash("ripemd128", $mypassword);

$sql = "SELECT * FROM CSIS2440.User where Email = '$myusername' AND ThePass = '$Hashed'";
$result = $con->query($sql);

if (!$result){
    $message = "Whole query " . $sql;
    echo $message;
    die('Invalid query: ' . mysqli_error());
}

$count = $result->num_rows;

if ($count ==1){
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $myusername;
    $_SESSION['password'] = $mypassword;
    $_SESSION['name'] = $row['Name'];
    
    header("Location:Catalog.php");
    
}else {
    header("Location:LoginPage.php");
    $_SESSION['badPass']++;
}

