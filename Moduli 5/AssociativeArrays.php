<?php
$grade = array(
    "Math"=>"3", 
    "Art"=>"5", 
    "History"=>"3"
) echo "Your grade in math is". $grade ['Math'];
echo "<br>"

foreach($grade as $Subject => $grade){
    echo "Subject:". $Subject. "Grade". $grade;
    echo "<br>"
}
?>