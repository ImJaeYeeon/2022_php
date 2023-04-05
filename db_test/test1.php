<?php
//1. mysql접속
include('./db_conn.php');
$conn=mysqli_connect($host,$id,$pw,$db);

// $conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    echo "connected!!";
}else{
    echo "failed!!!!";
}

//2. 원하는 작업하기(쿼리 날리기)
 //mysqli_query($conn,"insert into book values(6,'인문학','조정래','a@gamil.com','오계절')");
// echo "추가되었습니다";

//$query="insert into book values(6,'인문학','조정래','a@gamil.com','오계절')";
//mysqli_query($conn,$query);
echo "추가되었습니다";

$query="update book set author='임재연' where author='조정래' ";
mysqli_query($conn,$query);
echo "변경되었습니다";



// mysqli_query($conn,"update book set author='임재연' where author='조정래' ");
// echo "변경되었습니다";

//3. mysql 종료
mysqli_close($conn);



?>