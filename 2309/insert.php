<?php
include('./db_conn.php');

$_id=$_POST['userid'];
echo "아이디:".$_id;

$_p=$_POST['userpass'];
echo "비밀번호:".$_p;

$_name=$_POST['username'];
echo "이름:".$_name;

$_tel=$_POST['usertel'];
echo "전화번호:".$_tel;

$_date=$_POST['wdate'];
echo "이메일:".$_email;


$query = "insert into register(userid,userpass,username,usertel,wdate)
value('$_id','$_p','$_name','$_tel','$_date')";
mysqli_query($conn,$query);
echo "<script>alert('가입되었습니다.');</script>";
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0; url=http://localhost/member/insert.html">