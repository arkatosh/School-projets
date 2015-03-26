<?php
echo '<meta charset="utf-8" />';
$månedsLgd=array('31','28','31','30','31','30','31','31','30','31','30','31');
$månede=array('Januar','Frebuar','marts','April','Maj','Juni','Juli','August','September','Oktober','November','December');

$månededage=count ($månedsLgd);
$månedenavn=count ($månede);

for ($i=0;$i<$månededage;$i++)
{
echo $månedsLgd[$i].' '.$månede[$i].'<br>';
}
?>