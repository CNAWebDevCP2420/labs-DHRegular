<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title></title>
</head>

<body>
  <?php
    $Boxes = array(
        "Small" => array(
            "Length" => 12, "Width" => 10, "Depth" => 2.5
        )
        "Medium" => array(
            "Length" => 30, "Width" => 20, "Depth" => 4
        )
        "Large" => array(
            "Length" => 60, "Width" => 40, "Depth" => 11.5
        )
    )
    foreach ($Boxes as $Size => $Dimension) {
        echo "<p>$Size Box Volume = " . $Dimension['Length'] . " &times; " . $Dimension['Width'] . " &times; " . $Dimension['Depth'] . " = " ($Dimension['Length']*$Dimension['Width']*$Dimension['Depth'])
    }
  ?>
</body>

</html>