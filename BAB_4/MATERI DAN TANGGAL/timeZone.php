<!DOCTYPE html>
<html>
    <head>
        <title>Time Zone</title>
    </head>
    <body>
        <?php
        date_default_timezone_set("Asia/Jakarta");
        echo "The time is " . date("h:i:sa") . "<br>";
        ?>
    </body>
</html>