<?php
$num = 5;
    if($num<0){
    echo "$num eshte me i vogel se 0";

} echo"<br>";
$age = 19;
if (($age > 12) &&($age<26) ){
    echo" you are a teenager";
}echo"<br>";

if ($age < 20){
    echo" you are under 18";
}
else{
    echo"You are a adult";
}echo"<br>";

if($num<0){
    echo "$num eshte numer negativ";
}
else if($num==0){
    echo "$num eshte i barabarte me 0";
}
else{
    echo"numri $num eshte numer pozitiv";
}echo "<br>";

$nr_1 =20;
$nr_2 =10;

if($nr_1== $nr_2){
    echo "$nr_1 eshte i barabrte me $nr_2";
}
else if ($nr_1> $nr_2){
    echo"$nr_1 is graeter than $nr_2";
}
else{
    echo"false";
}


?>