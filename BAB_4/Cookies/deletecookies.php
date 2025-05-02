<?php 
setcookie("user","", timE() - 3600);
?>
<HTMl>
    <head>
        <title>Delete cookies</title>
    </head>
    <body>
        <?php
        echo "Cookie 'user' is deleted.."; 
         ?>
    </body>
</HTMl>
