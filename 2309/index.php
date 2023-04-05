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
        a:link{
            text-decoration: none;
            color: black;
        }
        a:visited{
            text-decoration: none;
            color: #333;
        }
        a:hover{
            text-decoration: none;
            color: red;}
    </style>
    <title>register</title>
  </head>
  <table class="table table-hover">
  <tr><td>순번</td><td>아이디</td><td>이름</td><td>핸드폰</td><td>가입날짜</td></tr>
  <?php
    include('./db_conn.php');
    $query="select*from register order by id desc";
    $result=mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    for($i=0; $i<$count; $i++){
        $re=mysqli_fetch_row($result);
        echo"<tr><td>$re[0]</td><td> $re[1]</td><td> $re[2]</td><td> $re[3]</td><td> $re[4]</td><td><a href='delete_form.php?b=$re[0]'>삭제</a></tr>";
    }
    mysqli_close($conn);
  ?>
  </table>
  <div style="margin: left 70px;">
<a href="insert.html" class="btn btn-outline-success">write</a>
</div>


