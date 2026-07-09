<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration</title>
        <link rel="stylesheet" type="text/css" href=".css"></link>
    </head>
    <body>
        <?php
        require_once 'include/dbconn.php';
        ?>
        <h1>Customer Registration Form.</h1>
        <?php
        $result = $conn->query(
            "INSERT INTO customer (	customer_email, customer_firstname, customer_lastname, customer_phone, SA_id_number) VALUES ("
                . "'$_GET[email]','$_GET[firstname]','$_GET[lastname]','$_GET[phonenumber]','$_GET[idnumber]')"
        );
        if($result) {
            echo "<strong>You have been successfully registered on the system as $_GET[email]</strong>";
            echo "<p><b>You may now proceed to and successfully order using your email adress</p>";
        } else {
            exit("<p class='err'> Your registration was unsuccessfull please try registering again. </p>");
        }
        ?>
        <li><a href="orders.php">Click here to proceed to create your order</a></li>

    </body>
</html>
