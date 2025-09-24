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
echo "<br>";
$beg = 18;
switch($beg){
 case ($beg >=0 && $beg <=18 ):
 echo "Je nje minor <br>";
 break;
 case ($beg >=18 && $beg <=25 ):
 echo "Je nje adult i ri<br>";
 break;
 case ($beg >25  ):
 echo "Je nje adult <br>";
 break;
 default:
 echo"invalid <br>";
 break;
}
echo "<br>";
$day = "monday";
switch ($day){
  
case 'monday':
echo"its monday";
break; 
case 'tuesday':
echo"its tuesday";
break; 
case 'wednsday':
echo"its wednsday";
break; 
case 'thursday':
echo"its thursday";
break; 
case 'friday':
echo"its friday";
break; 
case 'saturday':
echo"its saturday";
break; 
case 'sunday':
echo"its sunday";
break; 
}
echo "<br>";
$x = 1;
while($x <=5){
    echo ("the number is: $x <br>");
    $x++;
}
echo "<br>";
$y = 1;
do{
echo " the number is: $y <br>";
$y++;
}while ($y<=5 );



?>