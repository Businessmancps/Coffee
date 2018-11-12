<!dcoctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Famous Calculator Example</title>

</head>
<body>
  <?php
//Using typecasting changing the the variable's type even after it has been asigned a value
if($_SERVER['REQUEST_METHOD']=='POST')

{
  $quantity=(int) $_POST ['quantity'];
  $price=(float) $_POST['price'];
  $tax=(float) $_POST['tax'];

  if(($quantity>0) && ($price>0)&&($tax>0)){
    $total=$quantity* $price;
    $total+=$total *($tax/100);

    echo '<p>The total cost of purchasing' . $quantity.'widget(s) at $'
    . number_format ($price,2). ' ecach, plus tax, is $' .number_format($total,2).'.</p>';
  }
  else
    {
      echo '<p style="font-weight:bold; <color:>#C00">Please enter a valid quantity,price, and tax rate.</p>';
    }
  }
 ?>
  <h2> Widget Cost Calculator</h2>
  <form action="calculator.php" method="post">
<p>Quantity:<input type="number" name="quantity" step="1" min="1" value="<?php if(isset($quantity)) echo $quantity;?>"></p>
<p>Price:<input type="number" name="price" step=".01" min="0.01" value="<?php if(isset($price)) echo $price;?>"></p>
<p>Tax(%):<input type="text" name="tax" step=".o1" min="0.01" value="<?php if(isset($tax)) echo $tax;?>"></p>
<p><input type="submit" name="submit" value="Calculate!"></p>
</form>
</body>
</html>
