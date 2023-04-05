<?php
$sum=0;
for($i=100; $i<=999; $i++){
    if($i%4!=0){
        $sum+=$i;
    }
}
echo $sum;
?>