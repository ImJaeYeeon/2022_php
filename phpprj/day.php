<?php
$day=$_POST['day'];
switch($day%7){
    case 0: echo "일 요일"; break;
    case 1: echo "월 요일"; break;
    case 2: echo "화 요일"; break;
    case 3: echo "수 요일"; break;
    case 4: echo "옥 요일"; break;
    case 5: echo "금 요일"; break;
    case 6: echo "토 요일"; break;
    case 7: echo "일 요일"; break;

}
?>