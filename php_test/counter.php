<style>
    span{
        color:red;
        font-size:2em;
    }
    </style>
<?php
$filename = "count.txt";
$fp=fopen($filename,"r");
$num = fgets($fp);
$count=(int)$num;
$count=$count+1;
fclose($fp);

$fp=fopen($filename,"w");
fwrite($fp,$count);
fclose($fp);
?>

<h1> 당신은 <span> <?php echo $count ?> </span> 번째 방문자 입니다</h1>

