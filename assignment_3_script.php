<!Doctype html>
<html>
    <head>
        <title>Script</title>
    </head>
    <body>
        <h1>Payment Summary</h1><br><hr>
        Your payment has been submitted with the following data: <br>
        Card Type: <?php echo $_GET["cc"];?><br>
        Card Number: <?php echo $_GET["num"];?><br>
        Expiration Date: <?php echo $_GET["month"]/$_GET["year"];?><br>
        <?php
        if($_GET["default"])
            echo "This is the default Credit Card.";?><br>
        <?php
        if($_GET["bill"] == "credit")
            echo "Bill to Credit Card.";
        elseif($_GET["bill"] == "customer")
            echo "Bill to customer.";
        ?>
    </body>
</html>