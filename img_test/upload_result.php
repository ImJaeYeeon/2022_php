<?php
$f_name = $_FILES['userfile']['name']; //php에서 자동으로 만들어짐 $_FILES[name적기][업로드한 파일 이름을 출력]
$f_type = $_FILES['userfile']['type']; //업로드한 파일의 타입 $_FILES[name적기][]
$f_size = $_FILES['userfile']['size']; //업로드한 파일의 크기 $_FILES[name적기][]
$f_tmpname = $_FILES['userfile']['tmp_name']; //임시 파일 이름 $_FILES[name적기][임시 디렉토리에 저장된 임시 파일 이름을 출력]

echo "파일 이름: ".$f_name."<br/>";
echo "파일 타입: ".$f_type."<br/>";
echo "파일 크기: ".$f_size."<br/>";
echo "파일 임시 이름: ".$f_tmpname."<br/>";

$upload_dir = './abc/';
if(!is_dir($upload_dir)){
    mkdir($upload_dir);
}
//To do 진짜 파일이름
$upload_file1 = $upload_dir.basename($f_name);
if(move_uploaded_file($f_tmpname, $upload_file1)){
    echo "업로드 되었습니다.";
}
else {
    echo "업로드 실패하였습니다.";
}

//insert 쿼리 img_path : $upload_file1
include('./db_conn.php');

$sql = "insert into img(img_name, img_type, img_sieze, img_path)values('$f_name','$f_type',$f_size,'$upload_file1')";
echo "추가되었습니다.";
mysqli_query($conn, $sql);
?>