<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="css/asgn.css"></link>

    <img id="imgs" src="images/logo.jpg" alt="my logo" width="200" height="150">
    <img id="imgs" src="images/rolex.jpeg" alt="rolex" width="200" height="150">
    <img id="imgs" src="images/tissot.jpeg" alt="tissot" width="200" height="150">
    <img id="imgs" src="images/samsung galaxy.jpeg" alt="samsung" width="200" height="150">
    <img id="imgs" src="images/huawei.jpeg" alt="huawei" width="200" height="150">
    <img id="imgs" src="images/apple watch.jpeg" alt="apple" width="200" height="150">
    <div align=center id="div2"><h1>Place your orders below:</h1> </div>
    </head>
    <body>
        <table>
          <thead>
            <tr>
              <th id="th1">product_id</th><th id="th1">product_name</th><th id="th1">product_price</th><th id="th1">select</th>
            </tr>
          </thead>
        <?php
        require_once 'include/dbconn.php';
        $prdID = 0;
        $prdID = mysqli_insert_id($conn);

        $recset = $conn->query("SELECT * FROM products");
        if(mysqli_num_rows($recset) > 0){
            while($row = $recset->fetch_assoc())
            {
                echo "<tr><td>$row[product_id]</td>
                      <td>$row[product_name]</td><td>R".
                    number_format($row[product_price], 2,) ." </td>" .
                    "<td><input type='checkbox' $row[select]' "
                    . "size='3'></td><tr>";

                  }
                   mysqli_free_result($recset);

        } else {

            exit('<tr><td colspan="3">ERROR: '
                . 'Could not retrieve records from the dataset.</span></td></tr>');
        }
        ?>

       </table>
       <img id="imgs" src="images/logo 2.jpg" alt="logo2" width="200" height="150">
       <img id="imgs" src="images/anne klein.jpeg" alt="anne" width="200" height="150">
       <img id="imgs" src="images/tag.jpeg" alt="tag" width="200" height="150">
       <img id="imgs" src="images/nixon.jpeg" alt="nixon" width="200" height="150">
       <img id="imgs" src="images/audemars.jpeg" alt="audemars" width="200" height="150">
       <img id="imgs" src="images/diamond.jpeg" alt="diamond" width="200" height="150">

    <form action="getorders.php" method="get">
      <label for="email">Email address:</label><br>
      <input type="email" name="email" id="email" required="required" placeholder="Email address"><br>
      <input type="submit" value="Submit"><br>

    </form>
    <div align=center id="menu2">
      <a href="register.php">Click here to go registration</a><br><br>
      <a href="index.php">Click here to return to home</a>
    </div>

    </body>
</html>
