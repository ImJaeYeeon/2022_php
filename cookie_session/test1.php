<?php
//setcookie(쿠키변수,변수에들어갈 값, 시간)
setcookie("myCookie","kim",time()+3600);
echo $_COOKIE['myCookie'];
?>
<?php
session_start();
$_SESSION['city']='seoul';
$_SESSION['id']='userid';

echo $_SESSION['city'];
echo $_SESSION['id'];
?>