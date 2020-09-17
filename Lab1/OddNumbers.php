<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Odd Numbers</title>
</head>

<body>
  <?php
    echo "<p>The odd numbers between 1 and 100 are:</p>";
    $Number = 1;
    echo "<p>";
    while($Number <= 100) {
      echo $Number,"<br />";
      $Number = $Number + 2;
    };
  ?>
</body>

</html>
