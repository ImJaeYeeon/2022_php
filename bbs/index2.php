<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{margin:20px;}
        a:link{text-decoration:none; color:#333;}
        a:visited{text-decoration:none; color:#333;}
        a:hover{text-decoration:none; color:#333;}
    </style>
    <title>dds table</title>
  </head>
  <h1>BBS(bulletin board system)</h1>
  <table class="table table-hover">
  <tr><td>번호</td><td>제목</td><td>저자</td><td>내용</td><td>날짜</td><td>이메일</td></tr>
   
<?php
//1.목록 가져오기

//디비 접속
include('./db_conn.php');
//쿼리 날리기
$query="select*from bbs order by id desc";
$result=mysqli_query($conn,$query);

// $a = mysqli_fetch_row($result);
// echo $a[0]."</br>";
// echo $a[1]."</br>";
// echo $a[2]."</br>";
// echo $a[3]."</br>";
// echo $a[4]."</br>";
// echo $a[5]."</br>";
// echo $a[6];
// $b = mysqli_fetch_array($result);
// echo $b['id'];
// echo $b['title'];
// echo $b['writer'];
// echo $b['password'];
// echo $b['content'];
// echo $b['regDate'];
// echo $b['email'];
$count = mysqli_num_rows($result);
for($i=0; $i<$count; $i++){
    $re = mysqli_fetch_row($result);
    echo "<tr><td>$re[0]</td><td> $re[1]</td><td> $re[2]</td><td> $re[4]</td><td> $re[5]</td><td> $re[6]</td></tr>";
}

//쿼리 종료
mysqli_close($conn);
?>
</table>
<div style="margin: left 70px;">
<a href="write.html" class="btn btn-outline-success">write</a>
</div>