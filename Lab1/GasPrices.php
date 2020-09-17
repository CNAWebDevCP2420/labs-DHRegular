<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Gas Prices</title>
</head>

<body>
  <?php
    $GasPrice = 2.57;
    if (($GasPrice >= 2) && ($GasPrice <= 3)) {
      echo "<p>Gas Prices are between $2.00 and $3.00.</p>";
    }
    else {
      echo "<p>Gas Prices are not between $2.00 and $3.00.</p>";
    }
  ?>
</body>

</html>
