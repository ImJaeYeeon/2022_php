<?php
include('./db_conn.php');


$u_idx=$_POST['idx'];
$u_title = $_POST['title'];
$u_writer = $_POST['writer'];
$u_password= $_POST['password'];
$u_content= $_POST['content'];
$u_email= $_POST['email'];
$u_password= $_POST['password'];

$query = "select * from bbs where id=$u_idx";
$result = mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);
echo "password".$re[3];
echo "사용자입력 password".$u_password;

if($re[3]== $u_password){
    $query = "update bbs set title='$u_title' ,writer='$u_writer' ,password='$u_password' ,content='$u_content' ,email='$u_email' where id=$u_idx";
    mysqli_query($conn,$query);
    echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}


echo $u_title;
echo $u_writer;
echo $u_password;
echo $u_content ;
echo $u_email;
echo $u_idx;





?>