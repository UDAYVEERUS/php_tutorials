<?php


// sum of the marks 
function processMarks($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum = $sum + $value;
    }
    return $sum;
}

$uday = [34,56,76,56,99];
$sumMarks = processMarks($uday);

$diksha = [9,97,96,54,92];
$sumMarksHistory = processMarks($diksha);
echo "Total numebr of marks of uday $sumMarks / 500  <br>";
echo "Total numebr of marks of diksha  $sumMarksHistory / 500 <br>";



?>