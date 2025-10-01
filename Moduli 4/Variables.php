<?php
/*
$x = 5;

function localVariables(){
    $y = 10;
    
    echo $y;
}
localVariables();
echo"\n,$x";
*/
$x = 5;
$y = 7;
function sum(){
    global $x,$y;
    $y = $x + $x;
}
sum()
echo $y;
?>