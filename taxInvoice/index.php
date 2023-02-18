<?php
$invoiceNum = "INV20222";
$storeName = "Zaika Restaurant";
$storeAddress = "State Full: Riyadh
City:  Riyadh
Street:  Ulaya Dist.64965
Zip Code:  N/A
Format: 371 Guruwar Peth,Pune India,Saudi Arabia";
$date = date("d - m - Y");
$regNo = "123456789900003";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Invoice</title>
    <link rel="stylesheet" href="invoice.css">
</head>
<body>
    <section class="invoice-container">
        <div class="header flex-center">
            <h2>Simplified Sprocket Invoice</h2>
            <h4>Incoice Number : <?php echo("{$invoiceNum}"); ?> </h4>
            <h3><?php echo("{$storeName}"); ?></h3>
            <h4><?php echo("{$storeAddress}"); ?></h4>
        </div>
        <br>
        <div class="date">
            <h4>Date: <?php echo("{$date}"); ?> </h4>
            <h4>Added Meme Registration Number: <?php echo("{$regNo}"); ?></h4>
        </div>
        <br>
        <table class="mid-section">
            <thead class="mid-section-head">
               <tr>
                <th>Forums</th>
                <th>Column</th>
                <th>Column</th>
                <th>Column</th>
                <th> Column</th>
               </tr>
            </thead>
            <tbody class="mid-section-body">
                <tr>
                    <td>1 Product</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                </tr>
                <tr>
                    <td>1 Product</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                </tr>
                <tr>
                    <td>1 Product</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                    <td>2.99</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="bottom">
            <div class="bottom-row">
                <h5>Total Amount Subject To</h5>
                <h5>220</h5>
            </div>
            <div class="bottom-row">
                <h5>The Test (15%) value added tax</h5>
                <h5>220</h5>
            </div>
            <div class="bottom-row">
                <h5>The Test (15%) value added tax</h5>
                <h5>220</h5>
            </div>
        </div>
        <br><hr><br>
        <div class="qr-code">
          <h5>>>>>>>>>>>>>>Some Text 01000>>>>>>>>>>>>></h5>
          <br>
          <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8" title="Link to Google.com" />
        </div>
    </section>
</body>
</html>