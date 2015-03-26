<?php

$maks=10;
$sum=0;

for($i=10;$i<$maks;$i++)
{
echo $i.'<br>';
$sum=$i+$sum;
}
echo 'sum = '.$sum;
?>