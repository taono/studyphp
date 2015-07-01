<!DOCTYPE html PUBLIC "-//w3c//DTD XHMTL 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://wwww.w3.org/1999/xhtml" xml:lang= "en" lang="en">
<head>
    <meta http-equiv="Content-Type" content= "text/html; charset=utf-8"/>
    <title> product cost calculator</title>
   <!--don't understand the logic of the line of code belew-->
    <style type="text/css" media="screen"> .number {font-weight: bold;} </style>
</head>
<body>
    <!--this script handles the calculations of calculator.html-->
    <?php //script 4.2
    ini_set("display_error", 1);
    error_reporting(E-ALL| E-STRICT);
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $tax = $_POST['tax'];
    $shipping = $_POST['shipping'];
    $payment = $_POST['payment'];
    $total = $price * $quantity + $shipping-$discount;
    $taxrate = $tax/100;
    $taxrate++;
    $total = $total * $taxrate;
    $monthly= $total / $payment;
    $total = number_format ($total,2);
    $monthly = number_format ($monthly,2);
    //what does span mean?
    print "<p> you have selected to puechase: <br />
        <span class=\"number\">$quantity</span>
        widget(s) at <br />
        $<span class=\"number\">$price</span> price each plus a <br />
        $<span class=\"number\">$shipping</span> shipping cost and a <br />
        <span class=\"number\">$discount</span>discount, the total cost is
        $<span class=\"number\">$total</span>.<br />
        divided over <span class=\"number\">$payment</span>monthly payments, that would be
        $<span class=\"number\">$monthly</span>each.
        </p>";
    
    ?>
</body>
</html>