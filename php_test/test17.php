<!-- <?php
// dir=opendir('.'); //현재 디렉토리를 열어서 dir에 대입한다.

// while($file = readdir($dir)){
//     echo $file."</br>"
// }
?> -->

<!-- <?php
$dir=opendir('C:\Bitnami\wampstack-8.1.4-0\apache2'); //현재 디렉토리를 열어서 dir에 대입한다.

while($file = readdir($dir)){
    echo $file."</br>";
}
closedir($dir);
?> -->

<hr>
<?php
$list = scandir('./'); //현재디렉토리에 있는 파일과 폴더를 list(배열)에 대입
var_dump($list);
?>