<?php
$a1 = array(
    array(1, 2,9),
    array(3, 4,9),
    array(5, 6,9)
);

$a2 = array(
    array(1, 2,2),
    array(3, 4,0),
    array(5, 1,9)
);
$sum=0;
$result=array();


echo "<h2> M1 </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a1[$row][$col];
  }
}

echo "<h2> M2 </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a2[$row][$col];
  }
  }

echo "<h2> Result </h2>";
for($i=0;$i<=2;$i++){
echo "<br>";
for($j=0;$j<=2;$j++){

for($k=0;$k<=2;$k++){
$sum += $a1[$i][$k]*$a2[$k][$j];
}


$result[$i][$j]=$sum;
$sum = 0;
echo " ".$result[$i][$j];
}
}
?>
