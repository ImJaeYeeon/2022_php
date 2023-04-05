<?php
$dir="./data";//현재디렉토리 밑에 data라는 디렉토리를 dir에 대입한다.
if(is_dir($dir)){ //data라는 폴더가 있으면
    echo"디렉토리가 존재합니다" ."</br>";
}else{
    echo"디렉토리가 없습니다"."</br>";
}
?>

<?php
$dir="./";
if(file_exists($dir)){
    echo"파일과 디렉토리가 존재합니다"."</br>";
}else{
    echo"파일과 디렉토리가 존재하지 않습니다"."</br>";
}
?>