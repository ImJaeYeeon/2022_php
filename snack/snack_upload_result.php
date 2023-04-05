<?php
$i_name = $_FILES['userfile']['name']; //php에서 자동으로 만들어짐 $_FILES[name적기][업로드한 파일 이름을 출력]
$s_name = $_POST['sname'];
$s_price = $_POST['sprice'];
$f_tmpname = $_FILES['userfile']['tmp_name'];


$upload_dir = './abc/';
if(!is_dir($upload_dir)){
    mkdir($upload_dir);
}
//To do 진짜 파일이름
$upload_file1 = $upload_dir.basename($i_name);
if(move_uploaded_file($f_tmpname, $upload_file1)){
    echo "업로드 되었습니다.";
}
else {
    echo "업로드 실패하였습니다.";
}

//insert 쿼리 img_path : $upload_file1
include('./db_conn.php');

$sql = "insert into snack(name,price,img)values('$s_name','$s_price','$upload_file1')";
echo "추가되었습니다.";
mysqli_query($conn, $sql);
?>