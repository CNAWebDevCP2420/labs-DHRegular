<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Is Even</title>
</head>

<body>
  <?php
    $Value = 14;

    $NumberValue = (is_numeric($Value) ? "is a number" : "Is not a number");
    $EvenValue = (($Value % 2) == 0 ? "is even." : "is odd.");

    echo "<p>The value ", $Value, " ", $NumberValue, " and ", $EvenValue, "</p>";
  ?>
</body>

</html>
