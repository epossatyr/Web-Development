<!doctype html>
<html>
<head>
    <title>Posted</title>
</head>
<body>
    <h1>Payment Summary</h1>
    Your payment has been submitted with the following information:<br>
        <?php
        if($_GET["bill"] == "credit")
            echo "Bill to Credit Card.";
        elseif($_GET["bill"] == "customer")
            echo "Bill to customer.";
        ?>
    Card Type: <?php echo $_GET["cc"];?><br>
    Card Number: <?php echo $_GET["num"];?><br>
    Expiration Date: <?php echo $_GET["month"]/$_GET["year"];?><br>

</body>
</html>