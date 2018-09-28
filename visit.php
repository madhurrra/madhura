<?php 
$fp=fopen("visitor.txt","r");
$count=fread($fp,1024);
fclose($fp);
$count=$count+1;
echo "<p>PAGE VIEWS:".$count."</p>";
$fp=fopen("visitor.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
