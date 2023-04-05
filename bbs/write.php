<?php
    $r_title = $_POST['title'];
    $r_writer= $_POST['writer'];
    $r_password= $_POST['password'];
    $r_email= $_POST['email'];
    $r_content= $_POST['content'];

    $date = date('Y-m-d');

    echo $r_title."</br>";
    echo $r_writer."</br>";
    echo $r_password."</br>";
    echo $r_email."</br>";
    echo $r_content."</br>";
    echo $date."</br>";
    //mysql접속
    include('./db_conn.php');
    //쿼리 날리기
    $query="insert into bbs(title,writer,password,email,content,regDate) value('$r_title','$r_writer','$r_password','$r_email','$r_content','$date')";
    mysqli_query($conn,$query);
    echo "<script>alert('데이터가 추가되었습니다');</script>";
    
    echo "데이터가 추가되었습니다";
    //쿼리 종료
    mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0; url=http://localhost/bbs">