<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Sign Guest Book</title>
</head>

<body>
  <?php
    if (empty($_POST['first_name']) || empty($_POST['last_name']))
        echo "<p>You must enter your first and last name. Click your browser's Back button to return to the Guest Book.</p>\n"
    else {
        $FirstName = addslashes($_POST['first_name']);
        $LastName = addslashes($_POST['last_name']);
        $GuestBook = fopen("guestbook.txt", "ab");
        if (is_writable("guestbook.txt")) {
            if (fwrite($Guestbook, $LastName . ", " . $FirstName . "\n")
                echo "<p>Thank you for signing our guest book!</p>\n");
            else
                echo "<p>Cannot add your name to the guest book.</p>";
        }
        else
            echo "<p>Cannot write to the file</p>\n";
        fclose($GuestBook);
    }
  ?>
</body>

</html>