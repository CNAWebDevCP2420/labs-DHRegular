<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Hit Counter</title>
</head>

<body>
    <?php
        $CounterFile = "hitcount.txt";
        if(file_exists($CounterFile)) {
            $Hits = file_get_contents($CounterFile);
            ++$Hits;
        }
        else $Hits = 1;

        echo "<h1>There have been $Hits hits to this page.</h>\n";
    ?>
</body>

</html>