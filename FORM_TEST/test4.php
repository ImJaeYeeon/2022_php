<?php
$id=$_POST['id_name'];
echo "아이디는".$id."입니다"."<br/>";

$pw=$_POST['pass'];
echo "비밀번호는".$pw."입니다"."<br/>";

$pwck=$_POST['repass'];
echo "확인된 비밀번호는".$pwck."입니다"."<br/>";

$name=$_POST['name'];
echo "이름은".$name."입니다"."<br/>";

$last_tel=$_POST['telnum'];
echo "전화번호 뒷 자리는".$last_tel."입니다"."<br/>";

$mail=$_POST['email'];
echo "이메일은".$mail."입니다"."<br/>";

$my=$_POST['content'];
echo "자기소개는".$my."입니다"."<br/>";

for($i=0; $i<count($_POST['hooby']); $i++){
    $hooby=$_POST['hooby'][$i];
    echo "선택한 취미는".$hooby."입니다"."<br/>";
}

$gender=$_POST['gender'];
echo "당신의 성별은" .$gender ."입니다"."<br/>";




?>