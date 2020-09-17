<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Interest Array</title>
</head>

<body>
  <?php
    $InterestRate1 = .0725;
    $InterestRate2 = .0750;
    $InterestRate3 = .0775;
    $InterestRate4 = .0800;
    $InterestRate5 = .0825;
    $InterestRate6 = .0850;
    $InterestRate7 = .0875;

    $InterestRates = array(
      $InterestRate1,
      $InterestRate2,
      $InterestRate3,
      $InterestRate4,
      $InterestRate5,
      $InterestRate6,
      $InterestRate7
    );

    echo "<p>The following ", count($InterestRates), " interest rates are available:</p><p>";
    echo "$InterestRates[0]<br />";
    echo "$InterestRates[1]<br />";
    echo "$InterestRates[2]<br />";
    echo "$InterestRates[3]<br />";
    echo "$InterestRates[4]<br />";
    echo "$InterestRates[5]<br />";
    echo "$InterestRates[6]</p>";
  ?>
</body>

</html>
