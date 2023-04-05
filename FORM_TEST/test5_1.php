<?php
for($i=0; $i<count($_POST['fruit']); $i++){
   $a= $_POST['fruit'][$i];
   echo "선택하신 과일은".$a."<br/>";
}
?>