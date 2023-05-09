<?php

$search = "SELECT * FROM CSIS2440.Players where FirstName like '%" . $name . "%' "
        . "Order By FirsttName";

$return = $con->query($search);

if (!$return) {
    $message = "Whole query" . $search;
    echo $message;
    die('Invalid query: ' . mysqli_error($con));
}

echo "<table><th>First Name, Last Name</th><th width= '10%'>Birthdate</th><th>Email</th><th>Password</th>";
while ($row = $return->fetch_assoc()) {
    echo "<tr><td>" . $row['FirstName']. $row['LastName']
    . "</td><td>" . $row['Birthdate']
    . "</td><td>" . $row['Email']
    . "</td><td>" . $row['Password']. "</td></tr>";
}
echo "</table>";

