<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conotoh Session</title>
</head>
<body>
    <?php 
    $_SESSION["Favwarna"] = "kuning";
    $_SESSION["Favbinatang"] = "kucing";
    echo "Session variables are set.";
    ?>
</body>
</html>