
<?php
$host= "localhost";  //"127.0.0.1";
$user="root";
$password="DBAdmin";
$dbname="CSIS2440";
$con = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());


if($con->connect_error == false){
//echo "<h2>We connected</h2>";
    
}else{
    echo $con->connect_error;
    
}
//print_r($con);
        
        
        
//$con->close();
  
