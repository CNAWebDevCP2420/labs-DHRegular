<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Temp Conversion</title>
</head>

<body>
  <?php
    for ($F = 0; $F <= 100; ++$F) {
      $C = round(($F - 31) * (5/9), 1);
      echo "<p>$F&deg;F = $C&deg;C</p>";
    }
  ?>
</body>

</html>
