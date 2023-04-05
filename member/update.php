<?php
include('./db_conn.php');

$u_idx=$_POST['idx'];
$u_id = $_POST['uid'];
$u_password= $_POST['upassword'];
$u_name= $_POST['uname'];
$u_tel= $_POST['utel'];
$u_email= $_POST['uemail'];
$u_city=$_POST['sel'];

$query = "select * from member_join where id=$u_idx";
$result = mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);

if($re[2]== $u_password){
    $query = "update member_join set uid='$u_id' ,upassword='$u_password' ,uname='$u_name' ,utel='$u_tel' ,uemail='$u_email',ucity='$u_city' where id=$u_idx";
    mysqli_query($conn,$query);
    echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}

?>