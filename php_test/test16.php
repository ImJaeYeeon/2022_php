<!-- 1. strlen()글자길이 -->
<?php
$str="PHP is a pouplar language";
echo "글자길이: ".strlen($str)."</br>";
?>
<!-- strpos(전체문자열,문자열) -->
<?php
$str="abcdefhjijklmn";
$findme="e";
echo "findme의 위치:". strpos($str,$findme)."</br>";
?>
<!-- strcmp(문자열, 문자) 같으면 0, 다르면 1-->
<?php
$str1="Hello PHP";
$str2="Hello php";
if(strcmp($str1,$str2)==0){
    echo "같다</br>";
}else
    echo "다르다</br>";

?>
<!-- substr(문자열, 시작위치, [추출길이]) -->
<?php
$str="hello php welcome";
$sub=//시작위치:5에서 5개추출하는데 결과 : 공백 php 공백
substr($str,5,5);
echo "추출한 문자는".$sub."</br>";

?>
<!-- strtolower(문자열) -->
<?php
$str="Marry Had A Little Lamb and She LOVED It So";
echo strtolower($str)."</br>";
?>
<!-- strtoupper(문자열) -->
<?php
$str="Marry Had A Little Lamb and She LOVED It So";
echo strtoupper($str)."</br>";
?>
<!-- explode(구분자,문자열):문자열을 배열로 만들어 주는 것 -->
<?php
$str="pizza1 pizza2 pizza3 pizza4 pizza5";
$arr= explode(" ",$str);
foreach($str as $arr){
    echo $arr;
}
?>
<?php
$str="one|tow|three|four|five";
$arr2= explode("|",$str);
?>
<!-- implode(구분자,배열):배열을 문자열로 바꿈 -->
<?php
$array=array("lastname","email","phone");
//implde함수를 써서 문자열로 출력
$str=implode(",",$array);
echo "implode 실행 결과 후:".$str."</br>";
?>
<!-- str_replace(원본문자열,변경완료될 문자,대상문자열) -->
<?php
$txt="you should study"; //
$result=str_replace("should","could",$txt);
echo "변경전 문자열 :".$txt."</br>";
echo "변경후 문자열 :".$result."</br>";