<?php
$array=array("apple"=>1000,"banana"=>2000,"melon"=>3000);
// echo $array["apple"]." ";
// echo $array["banana"]." ";
// echo $array["melon"]." ";
foreach($array as $key=>$value){
    echo $key,$value;
}
?>