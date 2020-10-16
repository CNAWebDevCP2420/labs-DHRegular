<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Bowling Registry</title>
</head>

<body>
  <?php
    if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['average']))
        echo "<p>You must fill out your name, age, and average.</p>"
    else {
        $Name = addslashes($_POST['name']);
        $Age = addslashes($_POST['age']);
        $Average = addslashes($_POST['average']);
        $BowlingRegistry = fopen("registry.txt", "ab");

        if (is_writable("registry.txt")) {
            if (fwrite($BowlingRegistry, $Name . ", " . $Age . ", " . $Average . "\n")
                echo "<p>Thank you for registering!</p>\n");
            else
                echo "<p>Was unable to register.</p>";
        }
        else
            echo "<p>Was unable to register.</p>\n";
        fclose($BowlingRegistry);
    }
  ?>
</body>

</html>