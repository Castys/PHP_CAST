<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show PHP</title>
</head>
<body>
    <div class="menu">
        <?php include 'Menu.php';?>
    </div>
    <h1>Welcome to my home page!</h1>
    <p>Some Text.</p>
    <p>Some more text.</p>
    <?php include 'vars.php';
    echo "Aku punya warna $warna seperti $buah.";
    ?>
    <?php include 'Footer.php';      ?>
</body>
</html>