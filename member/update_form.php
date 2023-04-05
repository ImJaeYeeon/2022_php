<?php
$idx=$_GET['a'];
include('./db_conn.php');
$query = "select * from member_join where id=$idx";
$result = mysqli_query($conn,$query);
$re = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>수정</h1>
    <form method="post" action="update.php">
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            id<input type="id" class="form-control" id="exampleFormControlInput1" name="uid" placeholder="id" value="<?php echo $re[1] ?>">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            password<input type="password" class="form-control" id="exampleFormControlInput1" name="upassword" placeholder="password" value="<?php echo $re[2] ?>">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            name<input type="name" class="form-control" id="exampleFormControlInput1" name= "uname" placeholder="name" value="<?php echo $re[3] ?>">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            tel<input type="tel" class="form-control" id="exampleFormControlInput1" name= "utel" placeholder="tel" value="<?php echo $re[4] ?>">
        </div>
        <div class="form-floating mb-3 col-sm-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            email<input type="email" class="form-control" id="exampleFormControlInput1" name= "uemail" placeholder="email" value="<?php echo $re[5] ?>">
        </div>
        <div class="col-md-4">
                <label for="local" class="form-label">거주지:</label>
                <select id="local" class="form-select" name="sel">
                  <option selected>지역을 선택하세요</option>
                  <option value="서울">서울</option>
                  <option value="인천">인천</option>
                  <option value="경기">경기</option>
                  <option value="부산">부산</option>
                  <option value="대구">대구</option>
                  <option value="제주">제주</option>
                </select>
        </div>
        <input type="hidden" name="idx" value="<?php echo $re[0] ?>">
      <button type="submit" class="btn btn-warning">수정완료</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>