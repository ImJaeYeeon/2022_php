<?php
$a="kim";
$b="1111";

$_userid=$_POST['uid'];
$_userpass=$_POST['upass'];

if($_userid!=$a || $_userpass!=$b){
    echo "잘못입력";
}else{
    setcookie('userid',$_userid,time()+3600);
    setcookie('userpass',$_userpass,time()+3600);
    echo"<p>".$_userid."님 반값습니다</p>";
}
?>
<a href="logout.php">로그아웃</a>