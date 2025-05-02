<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nama : <input type="text" name="fname">
            <input type="submit">
        </form>
        <?php
        $name = $_REQUEST['fname'];
        echo $name;
        ?>
    </body>
</html>