<?php

// $handle = fopen ("php://stdin","r");
// fscanf($handle,"%d",$t);
// for($a0 = 0; $a0 < $t; $a0++){
//     fscanf($handle,"%d",$n);
// }

$nums=10;
$num1s=3;
$num2s=5;
$sums=0;
for($i=1;$i<$nums;$i++){
    
    if ($i%$num1s == 0 or $i%$num2s == 0) {
        $sums+=$i;
    }
    
}
echo $sums."\n";

$num=100;
$num1=3;
$num2=5;
$sum=0;
for($i=1;$i<$num;$i++){
    
    if ($i%$num1 == 0 or $i%$num2 == 0) {
        $sum+=$i;
    }
    
}
echo $sum;
?>
