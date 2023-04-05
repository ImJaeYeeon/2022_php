<?php
$even=0;
$odd=0;
for($i=1; $i<=30; $i++){
    if($i%2==0){
        $even+=$i;
    }else{
        $odd+=$i;
    }
}
echo "짝수 합:".$even. "<br/>";
echo "홀수 합:".$odd;