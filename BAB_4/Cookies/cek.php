<?php 
setcookie("text_cookie","test", timE() + 3600, '/');
?>
<HTMl>
    <head>
        <title>cek cookies</title>
    </head>
    <body>
        <?php
        if (count($_cookie) > 0) {
            echo "cookies are enabled.";
        } else {
            echo "cookie are disabled.";
        }
         ?>
    </body>
</HTMl>