<?php
$filename="./data/data.txt";
//현재 디렉토리밑에 data 폴더 밑에 data.txt를 filename에 대입해라
$fp=fopen($filename,"r");
// while($c =fgets($fp)){
//     echo $c."</br>";
// }
$str = file_get_contents($filename);
echo $str;
fclose($fp);
?>
<?php

?>