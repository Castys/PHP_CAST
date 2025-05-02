<?php 
$pesan = "Saya sudah belajar";
$pesanPerkata = explode("",$pesan);
$pesanPerkata = Array_map(fn($pesan) => strrev($pesan),$pesanPerkata);
$pesan = implode("",$pesanPerkata);

echo $pesan . "<br>";
 ?>