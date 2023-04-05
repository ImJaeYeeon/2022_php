<?php
//파일 쓰기 fwrite
$filename="data2.txt";
$str="cannot filed file";
$fp = fopen($filename,"w");
fwrite($fp, $str);
fclose($fp);
echo "저장되었습니다.";
?>

<?php
$filename="write.txt";
$str="marry had a dog";

file_put_contents($filename,$str);
echo "Saved !";
?>