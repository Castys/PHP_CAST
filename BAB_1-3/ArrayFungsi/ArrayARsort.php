<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
    $umur = array("Putra"=>"17", "Dani"=>"18", "Fani"=>"16");
    arsort($umur);
 
        foreach($umur as $x => $x_value) {
            echo "Nama " . $x . ", Umur " . $nilaiX . "<br>"; 
        }
        ?>


    </body>
    </html>