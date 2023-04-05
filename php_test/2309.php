<?php
//1.리턴타입X, 매개변수X
function add(){
    echo(10+20+30),"</br>";
}
add();
//2.리턴타입X, 매개변수O
function add2($x,$y,$z){
    echo($x+$y+$y);
}
add(10,20,30);
//3.리턴타입O, 매개변수X
function add3(){
    return 3+5;
}
$result=add();
echo($result);
//4.리턴타입O, 매개변수O
function add4($x,$y,$z){
    return ($x+$y+$z);
}
echo(add(10,20,30));