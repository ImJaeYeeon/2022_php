
<?php
include('./db_conn.php');


$u_idx=$_POST['idx'];
$u_sname = $_POST['sname'];
$u_sprice= $_POST['sprice'];
$u_userfile= $_POST['userfile'];

$query = "select * from snack where id=$u_idx";
$result = mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);

$query = "update snack set name='$u_sname' ,sprice='$u_sprice' ,userfile='$u_userfile'";
mysqli_query($conn,$query);
echo "수정되었습니다";


?>