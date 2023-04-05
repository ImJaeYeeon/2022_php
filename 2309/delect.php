<?php
include('./db_conn.php');
$_p=$_POST['password'];
echo "비밀번호:".$_p;

$_i = $_POST['idx'];
echo "아이디:".$_i;

$query="select *from register where id=$_i";
$result=mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);

if($_p===$re[2]){
    $query="delete from register where id=$_i";
    mysqli_query($conn,$query);
    echo "비밀번호 삭제 완료";
}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}

?>
<meta http-equiv="refresh" content="0; url=http://localhost/2309">
?>