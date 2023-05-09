<?php
session_start();
setlocale(LC_MONETARY, 'en_US');
$product_id = $_POST['Select_Product'];
$action = $_POST['action'];
switch ($action) {
    case "Add":
        $_SESSION['cart'][$product_id] ++;
        break;
    case "Remove":
        $_SESSION['cart'][$product_id] --;
        if ($_SESSION['cart'][$product_id] <= 0)
            unset($_SESSION['cart'][$product_id]);
        break;
    case "Empty":
        unset($_SESSION['cart']);
        break;
}
require_once 'DataBaseConnection.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Commerce Website</title>

        <script>
            function productInfo(key) {
                //creates the datafile with query string
                var data_file = "CartInfo.php?info=" + key;
                //this is making the http request
                var http_request = new XMLHttpRequest();
                try {
                    // Opera 8.0+, Firefox, Chrome, Safari
                    http_request = new XMLHttpRequest();
                } catch (e) {
                    // Internet Explorer Browsers
                    try {
                        http_request = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            http_request = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            // Something went wrong
                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }
                http_request.onreadystatechange = function () {
                    if (http_request.readyState == 4)
                    {
                        var text = http_request.responseText;

                        //this is adding the elements to the HTML in the page
                        document.getElementById("productInformation").innerHTML = text;
                    }
                }
                http_request.open("GET", data_file, true);
                http_request.send();
            }
        </script>

        <?php
        include 'Header.php';
        ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div>

                </div></div>
            <div class="col-sm-8">
                <form action="CartExample.php" method="Post">
                    <div >
                        <br>
                        <h1>Welcome to the Catalog</h1>
                        <p><span class="text">Please select one of our items:</span>
                            <select id="Select_Product" name="Select_Product" class="select">
                                <?php
                                $search = "SELECT Name, ProductID FROM CSIS2440.Products order by Name";
                                $return = $con->query($search);

                                if (!$return) {
                                    $message = "Whole query: " . $search;
                                    echo $message;
                                    die('Invalid query: ' . mysqli_error());
                                }

                                while ($row = mysqli_fetch_array($return)) {
                                    if ($row['ProductID'] == $product_id) {
                                        echo "<option value='" . $row['ProductID'] . "' selected='selected'>" . $row['Name'] . "</option>\n";
                                    } else {
                                        echo "<option value='" . $row['ProductID'] . "'>" . $row['Name'] . "</option>\n";
                                    }
                                }
                                ?>
                            </select></p>
                        <table>
                            <tr>
                                <td>
                                    <input id="button_Add" type="submit" value="Add" name="action" class="button"/>
                                </td>
                                <td>
                                    <input name="action" type="submit" class="button" id="button_Remove" value="Remove"/>
                                </td>
                                <td>
                                    <input name="action" type="submit" class="button" id="button_empty" value="Empty"/>
                                </td>
                                <td>
                                    <input name="action" type="button" class="button" id="button_Info" value="Info" onclick="productInfo(document.getElementById('Select_Product').value)"/>
                                </td>
                            </tr>                    
                        </table>

                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="productInformation">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div id="Display_cart" class="col-sm-8">
                <?php
                if ($_SESSION['cart']) {
                    echo "<br><table border=\"1\" padding=\"3\" width =\"640px\"><tr><th>Name</th><th>Quantity</th><th>Price</th>"
                    . "<th width=\80px\">Line Cost</th></tr>";
                    foreach ($_SESSION['cart'] as $product_id => $quantity) {
                        $sql = "SELECT Name, Price FROM CSIS2440.Products WHERE ProductID = " . $product_id;
                        $result = $con->query($sql);

                        if (mysqli_num_rows($result) > 0) {
                            list($name, $price) = mysqli_fetch_row($result);
                            $line_cost = $price * $quantity;
                            $total = $total + $line_cost;
                            echo "<tr>";
                            echo "<td align=\"left\" width=\"450px\">$name</td>";
                            echo "<td align=\"center\" width=\"75px\">$quantity</td>";
                            echo "<td align=\"center\" width=\"75px\">" . money_format('%(#8n', $price) . "</td>";
                            echo "<td align=\"center\">" . money_format('%(#8n', $line_cost) . "</td>";
                            echo "</tr>";
                        }
                    }
                    echo "<tr>";
                    echo "<td align=\"right\"></td><td align=\"right\"></td><td align=\"right\">Total</td>";
                    echo "<td align=\"right\">" . money_format('%(#8n', $total) . "</td>";
                    echo "</tr>";
                    echo "</table><br>";
                } else {
                    echo "There are no items in your cart<br>";
                }
                ?>

            </div>
        </div>
    </div>
    <?php
    include "Footer.php";
    ?>

    <br><br>

    <a class="button" href="SessionDestroy.php">Logout</a>
