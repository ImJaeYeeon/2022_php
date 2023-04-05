<?php
$name=$_POST['name'];
echo "이름:" .$name ."</br>";

$ko=$_POST['korean'];
echo "국어:" .$ko ."</br>";

$en=$_POST['english'];
echo "영어:".$en ."</br>";

$ma=$_POST['math'];
echo "수학:".$ma ."</br>";

$total= ($ko+$en+$ma);
echo "총점:" .$total."</br>";

$avg=($total/3);
echo "평균:".$avg."</br>";
?>