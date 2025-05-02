<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tanggal1=strtotime("May 17");
    $tanggal1=ceil(($tanggal1-time())/60/60/24);
    echo "There are" . $tanggal2 . "days until 17 of May."
    ?>
</body>
</html>