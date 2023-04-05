<?php
$snacknum=$_POST['snack'];

if($snacknum>10){
    $price=$snacknum*1500;
}else{
    $price=$snacknum*2000;
}
echo "과자의 개수는".$snacknum ." 가격은" .$price;
?>