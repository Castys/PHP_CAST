<?php
$a = 25;
$b = 35;
function addition(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}    
addition();
echo $c;
?>