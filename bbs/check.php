<?php

if(!isset($_COOKIE['userid']) or !isset($_COOKIE['userpass'])){
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }else{
    echo "<meta http-equiv='refresh' content='0; url=write.html'>";
  }
  ?>