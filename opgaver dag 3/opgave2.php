<?php

$maks=10;
$i=10;
$sum=0;

do {
echo $i.'<br>';
$sum=$i+$sum;
$i++;
}
While ($i<$maks);
echo 'sum = '.$sum;
?>