<?php
// Merchant Information
$merCompany = "ellMenus";
$merGST = "1234567898";
$merState = "Riyadh";
$merCity = "Riyadh";
$merStreet = "New Desert View Street";
$merZip = "986656";
$merAddress = "787 Gulberg Colony, Riyadh - Saudi Arabia";
$merPhone = "966 7834873487";
$merEmail = "hollyglucamolly@gmail.com";
$merWebsite = "https://www.ellmenus.com";

// Customer Information
$cusName = "Mohammad Hisham Mir";
$vat = "7823903487";
$cusState = "Riyadh";
$cusCity = "Riyadh";
$cusStreet = "New City Street";
$cusZipCode = "986754";
$cusAddress = "767 New City Street, Riyadh - Saudi Arabia";

// Invoice Information
$invoiceNum = "VAT-78348734";
$poNum = "87548945";
$date = date("d - m - Y");

// Table Content
$table = array(
     "sno1" => array(
          "sno" => 1,
          "description" => "Pizza",
          "quantity" => 5,
          "rate" => 5.00,
          "amount" => 25.00
     ),
     "sno2" => array(
          "sno" => 2,
          "description" => "Pasta",
          "quantity" => 4,
          "rate" => 4.00,
          "amount" => 16.00
     ),
     "sno3" => array(
          "sno" => 3,
          "description" => "Noodles",
          "quantity" => 3,
          "rate" => 3.00,
          "amount" => 9.00
     ),
     "sno4" => array(
          "sno" => 4,
          "description" => "Chicken",
          "quantity" => 2,
          "rate" => 10.00,
          "amount" => 20.00
     ),
     "sno5" => array(
          "sno" => 5,
          "description" => "Soup",
          "quantity" => 1,
          "rate" => 3.00,
          "amount" => 3.00
     )
);

// Number to words converter function
function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}
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
        <div class="header">
              <div class="merchant-info-left">
                <p><?php echo("{$merCompany}"); ?></p>
                <p>GSTIN: <?php echo("{$merGST}"); ?></p>
                <p>State: <?php echo("{$merState}"); ?></p>
                <p>City: <?php echo("{$merCity}"); ?></p> 
                <p>Street: <?php echo("{$merStreet}"); ?></p>
                <p>Zip Code: <?php echo("merZip"); ?></p>
                <p><?php echo("$merAddress"); ?></p>
                <p><?php echo("{$merPhone}"); ?></p>
                <p><?php echo("{$merEmail}"); ?></p>
                <p><?php echo("{$merWebsite }"); ?></p>
              </div>
              <div class="merchant-info-right">
                <img class="logo" src="logo.png" alt="logo">
                <h1>Tax Invoice</h1>
              </div>
        </div>
        <br><br>
        <div class="middle">
            <div class="middle-left">
               <strong>Bill To:</strong>
               <p> <?php echo("{$cusName}"); ?> </p>
               <p> VAT: <?php echo("{$vat}"); ?> </p>
               <p> State: <?php echo("{$cusState}"); ?> </p>
               <p> City: <?php echo("{$cusCity }"); ?> </p>
               <p> Street: <?php echo("{$cusStreet}"); ?> </p>
               <p> Zip Code: <?php echo("{$cusZipCode}"); ?> </p>
               <p> Address: <?php echo("{$cusAddress}"); ?> </p>
            </div>
            <div class="middle-center">
               <img class="qr-Code" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8" title="Link to Google.com" />
            </div>
            <div class="middle-right">
              <p>Invoice Number: <?php echo("{$invoiceNum}"); ?></p>
              <p>Invoice Date : <?php echo("{$date}"); ?></p>
              <p>Due Date: <?php echo("{$date}"); ?></p>
              <p>Supply Date:<?php echo("{$date}"); ?></p>
              <p>PO Number: <?php echo("{$poNum}"); ?></p>
            </div>
        </div>
        <br><br>
        <div class="bottom">
            <table class="table">
                <thead>
                    <tr>
                        <th>S no.</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      foreach ($table as $row){
                        echo("
                           <tr> 
                             <td>{$row["sno"]}</td>
                             <td>{$row["description"]}</td>
                             <td>{$row["quantity"]}</td>
                             <td>{$row["rate"]}</td>
                             <td>{$row["amount"]}</td>
                           </tr>
                        ");
                      }
                      $total = 0;
                      foreach($table as $row){
                        $total = $total + $row["amount"];
                      }
                      echo("<tr>
                                <td colspan=\"4\">Net Amount</td>
                                <td>{$total}</td>
                            </tr>");
                    ?>
                </tbody>
            </table>
            <br>
            <p><strong>Amount in words: <?php 
                echo(convertNumberToWord($total));
            ?> </strong></p>
        </div>
    </section>
</body>
</html>