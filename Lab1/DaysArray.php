<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Days Array</title>
</head>

<body>
  <?php
    $Days[] = "Monday";
    $Days[] = "Tuesday";
    $Days[] = "Wednesday";
    $Days[] = "Thursday";
    $Days[] = "Friday";
    $Days[] = "Saturday";
    $Days[] = "Sunday";

    echo "<p>The days of the week in English are:</p><p>";
    echo "$Days[0]<br />";
    echo "$Days[1]<br />";
    echo "$Days[2]<br />";
    echo "$Days[3]<br />";
    echo "$Days[4]<br />";
    echo "$Days[5]<br />";
    echo "$Days[6]</p>";

    $Days[0] = "Lundi";
    $Days[1] = "Mardi";
    $Days[2] = "Mercedi";
    $Days[3] = "Jeudi";
    $Days[4] = "Vendredi";
    $Days[5] = "Samedi";
    $Days[6] = "Dimache";

    echo "<p>The days of the week in French are:</p><p>";
    echo "$Days[0]<br />";
    echo "$Days[1]<br />";
    echo "$Days[2]<br />";
    echo "$Days[3]<br />";
    echo "$Days[4]<br />";
    echo "$Days[5]<br />";
    echo "$Days[6]</p>";
  ?>
</body>

</html>
