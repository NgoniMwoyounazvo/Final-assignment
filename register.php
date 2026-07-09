<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="css/asgn.css"></link>
    </head>
    <body>
      <table>
              <tr align=center>
                  <td colspan="2" id="td1">
                    <div id="div1" >
                    <h1 align=center>Complete the registration form below</h1>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td id="td2">
                    <div align=center id="menu1">
                      <a href="register.php">Click here to register</a><br><br><br>
                    <br><br><br> <a href="orders.php">Click here to place order</a>
                    </div>
                  </td>
                  <td style="padding:20px; vertical-align:top;">
                    <form align=center action="getreg.php" method="get">

                        <label for="mail">Email address:</label><br>
                        <input type="email" name="email" id="mail" required="required" placeholder="Insert email address"><br><br>
                        <label for="fname">First name:</label><br>
                        <input type="text" name="firstname" id="fname" required="required" placeholder="Insert your firstname"><br><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" name="lastname" id="sname" required="required" placeholder="Insert your lastname"><br><br>
                        <label for="phnnumber">Phone number:</label><br>
                        <input type="number" name="phonenumber" id="phnnumber" required="required" placeholder="Insert your phonenumber"><br><br>
                        <label for="idnumber">ID number:</label><br>
                        <input type="text" name="idnumber" id="idnum" required="required" placeholder="Insert your SA ID number"><br><br><br>

                        <input id="btn" type="submit" value=" click here to submit"><br>
                    </form>

                  </td>
              </tr>
              <tr>
                  <td id="td4" colspan="2">
                    <p><img src="images/whatsapp.png" width="30px" height="30px">
                     WHATSAPP/CALL: 0749209184
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="images/facebook.png" width="30px" height="30px">
                     FACEBOOK Visit our profile : Top watches
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="images/instagram.jpg" width="30px" height="30px">
                     INSTAGRAM profile : Top watches
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="images/gmail.png" width="30px" height="30px">
                     EMAIL: 4067023@gmail.com</p>
                  </td>
              </tr>
          </table>




    </body>
</html>
