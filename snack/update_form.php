<?php
$idx = $_GET['a'];
include('./db_conn.php');
$query = "select * from snack where id=$idx";
$result = mysqli_query($conn,$query);
$re = mysqli_fetch_row($result);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>snack</h1> 
    <form method="post" action="update.php" enctype="multipart/form-data">
        과자 이름:<input type="text" name="sname" value="<?php echo $re[1]?>"><br>
        과자 가격: <input type="text" name="sprice" value="<?php echo $re[2] ?>"> <br>
        파일선택:<input type="file" name="userfile" value="<?php echo $re[3] ?>"><br/>
        <button type="submit">업로드</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>