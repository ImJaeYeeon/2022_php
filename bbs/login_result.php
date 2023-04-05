<?php
include('./db_conn.php');

$userid=$_POST['uid'];
$userpass=$_POST['upass'];

$query="select * from bbs where uid='$userid' && upassword='$userpass'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if($count==0){
    echo "<script>alert('비밀번호,아이디 입력 오류');history.go(-1);</script>";
}else{
    setcookie('userid',$_userid,time()+3600);
    echo"1";
    setcookie('userpass',$_userpass,time()+3600);
    echo"2";
    echo "<meta http-equiv='refresh' content='0; url=write.html'>";
}
?>
<a href="logout.php">로그아웃</a>