<?php
$u_name="kim";
$u_num="3333";

$name=$_POST['user_name'];
// echo "이름은".$name."입니다"."<br/>";
$num=$_POST['user_num'];
// echo "학번은".$num."입니다";


if(($u_name==$name)&&($u_num==$num)){
    echo "회원정보가 맞습니다.";
}else if(($u_name!=$name)||($u_num!=$num)){
    echo "회원정보가 맞지 않습니다.";
}else{
    echo "회원이 아닙니다.";
}

?>