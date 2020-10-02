<!DOCTYPE html PUBLIC "-//W3C//DTD KHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Password Strength</title>
</head>

<body>
    <?php
        $Passwords = array("Wow23!", "HugeFan455#fun", "254518959", "Alphabet", "whatajoyride", "insecticide4U?", "whatamieventyping?", "anotherpasswordtovalidateinthistest", "!!!!!!!", "GG776655tt!", "Fun time$");

        function validation($pass) {
            $test1='/[A-Z]/';
            $test2='/[a-z]/'; 
            $test3='/[^a-zA-Z\d\s]/'; 
            $test4='/[0-9]/'; 
            $test5='/[\s]/'; 

            if(preg_match_all($test1, $pass, $out)<1) return "Must include at least one Upper Case Letter";

            if(preg_match_all($test2, $pass, $out)<1) return "Must include at least one Lower Case Letter";

            if(preg_match_all($test3, $pass, $out)<1) return "Must include at least one Special Character";

            if(preg_match_all($test4, $pass, $out)<1) return "Must include at least one digit";
  
            if(preg_match_all($test5, $pass, $out)>=1) return "There shouldn't be any spaces";

            if(strlen($pass) <= 8 || strlen($pass) >= 16 ) return "Password Length should be between 8 and 16";

            return "Good";
        }

        for($i = 0; $i < count($Passwords); $i++) {
            $Reason = validation($Passwords[$i]);
            
            echo $Passwords[$i] . " : ";

            if ($Reason == "Good")
                echo "Password is strong <br />";
                else echo $Reason . "<br />";
        }
    ?>
</body>

</html>