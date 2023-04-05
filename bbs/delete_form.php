<?php
$_b=$_GET['b'];
echo "아이디값:".$_b;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BBS 삭제</h1>
    <form method="post" action="delete.php">
    <div class="form-floating mb-3 col-sm-3">
        
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        비밀번호 입력하세요<input type="password" class="form-control" id="exampleFormControlInput1" name= "password" placeholder="password">
      </div>
     <input type="hidden" name="idx" value="<?php echo $_b ?>">
      <button type="submit" class="btn btn-warning">입력완료</button>
    </form>
</body>
</html>