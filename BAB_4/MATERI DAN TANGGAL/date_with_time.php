<!DOCTYPE html>
<html>
    <head>
        <title>Time Zone</title>
    </head>
    <body>
        <?php
        $tanggal=mktime(10, 14, 54, 8, 12, 2023);
        echo "Created date is" . date("Y-m-d h:i:sa", $tanggal) . "<br>";
        ?>
    </body>
</html>