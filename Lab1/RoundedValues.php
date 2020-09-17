<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Rounded Values</title>
</head>

<body>
  <?php
    $Value = 5.3;

    echo "<p>The value, ", $Value, ", when rounded to the nearest value is: ";
    echo round($Value), "<br />";

    echo "The value, ", $Value, ", when rounded down to the nearest value is: ";
    echo floor($Value), "<br />";

    echo "The value, ", $Value, ", when rounded up to the nearest value is: ";
    echo ceil($Value), "</p>";
  ?>
</body>

</html>
