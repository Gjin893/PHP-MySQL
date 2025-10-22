<?php

$host ='localhost';
$user= 'root';
$psw = '';
$dbname= 'db1';


try{
    $conn = new PDO ("mysql:host=$host; dbname=$dbname",$user,$psw);
}catch(Exeption $e){
    echo"something went wrong";
}
?>