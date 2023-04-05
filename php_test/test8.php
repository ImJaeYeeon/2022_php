<?php
$even=0;
$odd=0;
for($i=0; $i<=5; $i++){
    if($i%2==0){
        $sum1+=$i;
    }else{
        $sum2+=$i;
    }
}

echo "짝수의 합=".$even;
echo "홀수의 합=".$odd;
?>