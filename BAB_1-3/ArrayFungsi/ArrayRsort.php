<html>
    <head>
        <title></title>
    </head>
    <body><?php
    $bilangan = array(4, 6, 2, 22, 11);
       rsort($bilangan);

        $pjg = count($bilangan);
        for ($i = 0; $i < $pjg; $i++) {
            echo $bilangan[$i] . "<br />";
              
        }
        ?>
    </body>
</html