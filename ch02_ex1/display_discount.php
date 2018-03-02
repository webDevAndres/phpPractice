<?php
//get the values from the POST array
$productDescription = filter_input(INPUT_POST, 'product_description');
$listPrice = filter_input(INPUT_POST, 'list_price');
$discountPercent = filter_input(INPUT_POST, 'discount_percent');

//calculate the discount amount
$discountAmount = $listPrice * $discountPercent * .01;

// calculate the discount price
$discountPrice = $listPrice - $discountAmount;

// add currency and percent formatting

$listPriceFormatted = "$".number_format($listPrice, 2);
$discountPercentFormatted = $discountPercent."%";
$discountAmountFormatted = "$".number_format($discountAmount, 2);
$discountPriceformatted = "$".number_format($discountAmount, 2);

?>




<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($productDescription); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($listPrice); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discountPercent); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($discountAmount); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($discountPrice); ?></span><br>
    </main>
</body>
</html>