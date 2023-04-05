<?php
include('./db_conn.php');

$_id=$_POST['uid'];
echo "아이디:".$_id;

$_p=$_POST['upassword'];
echo "비밀번호:".$_p;

$_name=$_POST['uname'];
echo "이름:".$_name;

$_tel=$_POST['utel'];
echo "전화번호:".$_tel;

$_email=$_POST['uemail'];
echo "이메일:".$_email;

$_city=$_POST['sel'];
echo "거주지:".$_city;

$query = "insert into member_join(uid,upassword,uname,utel,uemail,ucity) 
value('$_id','$_p','$_name','$_tel','$_email','$_city')";
mysqli_query($conn,$query);
//echo "<script>alert('가입되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0; url=http://localhost/member/join.html">