<html>
    <head>
        <title>Array Sort</title>
    </head>
    <body>
        <?php
        $bilangan = array(4, 6, 2, 22, 11);
        sort($bilangan);

        $arrlength = count($bilangan);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $bilangan[$x];
            echo "<br>";    
        }
        ?>
    </body>
</html>