<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="css/asgn.css"></link>
    </head>
    <body>
        <h2>Your order is as follows:</h2>
        <table>
          <thead>
            <tr>
              <th>Order_id</th><th>	customer_email</th><th>product_id</th><th>product_name</th><th>product_price</th>
            </tr>
          </thead>
          <tbody>
          <?php
        require_once 'include/dbconn.php';
        $Selected= [];
        $html="";
        $ordID = 0;
        $sql= "SELECT * FROM products";

        $result = $conn->query(
            "INSERT INTO orders (	Order_id, customer_email, product_id, product_name, product_price,total,total_Incl_VAT) VALUES ("
                . "'$_GET[$ordID]','$_GET[email]',)"
        );

        if($result) {
            echo "<strong> your order has been received and our agent will contact:  $_GET[email] for further progression</strong>";
                } else {
            exit("<p class='err'> your order was unsuccessfull </p>");
        }
        ?>



      </tbody>
      </table>

    </body>
</html>
