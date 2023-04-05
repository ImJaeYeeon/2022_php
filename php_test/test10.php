<?php
$sum=0;
for($i=100; $i<=999; $i++){
    if($i%7==0){
        $sum+=$i;
    }
}
echo "갯수:".$i."</br>";
echo "합:".$sum;
?>