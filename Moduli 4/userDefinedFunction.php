<?php
function helloWorld(){
    echo"helloWorld";
}
helloWorld();

echo "<br>";
function sum(){
    $value = 120+20;
    echo "$value";
}
sum();

echo "<br>";
function maximum($x, $y){
   if($x>$y){
    return $x;
   }
   else{
    return $y;
   }

}
$a = 20;
$b = 30;
$sum= maximum($a,$b);
echo "The max of $a and $b is $sum \n ";
?>