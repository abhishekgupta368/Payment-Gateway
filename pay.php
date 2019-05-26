<?php
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="pay.css">
  </head>
  <body >
    <div class="pay_form_container">
      <h1>Payment Gateway</h1>
      <form class="pay" action="payment.php" method="post">
        <table align="center">
          <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" placeholder="John Doe"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="john45@gmail.com"></td>
          </tr>
          <tr>
            <td>Customer contact</td>
            <td><input type="number" name="contact" placeholder="9999542312"></td>
          </tr>
          <tr>
            <td>Amount</td>
            <td><input type="number" name="amt" value="Rs 100"></td>
          </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="sumbit">

      </form>
    </div>
  </body>
</html>
