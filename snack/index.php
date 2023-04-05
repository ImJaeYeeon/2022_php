<!DOCTYPE html>
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
    <title>snack table</title>
</head>
<table class="table table-hover">
  <tr><td>번호</td><td>이름</td><td>가격</td><td>사진</td><td>비고</td></tr>
<?php
//디비 접속
include('./db_conn.php');
//쿼리 날리기
$query="select*from snack order by id desc";
$result=mysqli_query($conn,$query);
$count = mysqli_num_rows($result);

for($i=0; $i<$count; $i++){
    $re = mysqli_fetch_row($result);
    echo "<tr><td>$re[0]</td><td> $re[1]</td><td> $re[2]</td><td><img src='$re[3]'></td><td><a href='update_form.php?a=$re[0]'>수정</a>&nbsp;<a href='delete_form.php?b=$re[0]'>삭제</a></tr>";
}

//쿼리 종료
mysqli_close($conn);
?>
</table>
<div style="margin: left 70px;">

<a href="snack_upload.html" class="btn btn-outline-success">write</a>
</div>