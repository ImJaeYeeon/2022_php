<?php
$a=0;
for($i=0; $i<=100; $i++){
    if($i%4==0){
        echo $i;
        $a++;
    }
    if($a%8==0){
        echo "<br>";
    }
}
?>