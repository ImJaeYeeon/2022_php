<?php
$f_name=$_FILES['userfile']['name'];
$f_size=$_FILES['userfile']['size'];
$f_type=$_FILES['userfile']['type'];
$f_tmp_name=$_FILES['userfile']['tmp_name'];

echo "name:".$f_name."<br/>";
echo "name:".$f_size."<br/>";
echo "name:".$f_type."<br/>";
echo "name:".$f_tmp_name."<br/>";

//사용자로부터 업로드되는 파일을 저장하는 디렉토리 지정
$uploads_dir='uploads/';
if(!is_dir($uploads_dir)){
    mkdir($uploads_dir);
}
//basename :경로를 없애주고 파일이름을 추출하는 함수
$upload_file=$uploads_dir.basename($_FILES['userfile']['name']);
//move_upload_file(임시파일이름,월래파일이름)
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_file)){
    echo "파일업로드 성공";
}else{
    echo "파일업로드 실패";
}


?>