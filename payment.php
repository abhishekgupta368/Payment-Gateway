<?php
  session_start();
  if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $mobile = $_POST["contact"];
    $email = $_POST['email'];
    $amount = $_POST['amt'];
    $_SESSION['email'] = $_POST['email'];

  }
  //$pay_key = "nUqrnR44783291417105";
  //https://securegw-stage.paytm.in/theia/processTransaction?ORDER_ID=order1
?>
<html>
    <head>
        <title>Merchant Check Out Page</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="pay.css">
    </head>
    <body>

        <div class="pay_form_container">
          <form class="pay" method="post" action="paytm/PaytmKit/pgRedirect.php" name="f1">
            <input type="hidden" name="MID" value="<?php //echo  $pay_key?>">
            <h1>Please do not refresh this page...</h1>

            <input type="hidden" name="WEBSITE" value="WEBSTAGING">
              <div id="tab">
                <center><h1 id="invoice">Invoice Gnerated</h1></center>
                <table align="center" style="color:white;">
                  <tr>
                    <td>Order Id</td>
                    <td><input name="ORDER_ID" value="<?php echo "ORD".rand(100000,999999)?>"></td>
                  </tr>
                  <tr>
                    <td>Customer Id</td>
                    <td><input name="CUST_ID" value="<?php echo "CST".rand(100000,999999)?>"></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input name="NAME" value="<?php echo $name?>"></td>
                  </tr>
                  <tr>
                    <td>Contact</td>
                    <td><input name="CONTACT" value="<?php echo $mobile?>"></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input name="EMAIL" value="<?php echo $email?>"></td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td><input name="TXN_AMOUNT" value="<?php echo $amount?>"></td>
                  </tr>
                  <input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
                  <input type="hidden" name="CHANNEL_ID" value="WEB">
                </table>
              </div>
              <input type="submit" name="submit" value="submit">
              <button type="button" name="print" onclick="createPDF()" style="width: 150px;height: 30px;font-family: sans-serif;font-size: 20px;">Print</button>
            </form>
        </div>

    </body>
    <script src="genrate_pdf.js"></script>
</html>
