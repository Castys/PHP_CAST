<!DOCTYPE html>
<html>
    <head>
        <title>Date strtotime</title>
    </head>
    <body>
        <?php
        $d=strtotime("tomorrow");
        echo "Tomorrow is " . date("Y-m-d h:i:sa", $d) . "<br>";
        $d=strtotime("next Saturday");
        echo "Next Saturday is " . date("Y-m-d h:i:sa", $d) . "<br>";
        $d=strtotime("+3 Months");
        echo "+3 Months is " . date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
    </body>
</html>