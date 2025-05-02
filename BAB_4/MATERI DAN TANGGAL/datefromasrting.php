<!DOCTYPE html>
<html>
    <head>
        <title>Date strtotime</title>
    </head>
    <body>
        <?php
        $tanggal=strtotime("10:14pm August 12 2023");
        echo "Created date is" . date("Y-m-d h:i:sa", $tanggal) . "<br>";
        ?>
    </body>
</html>