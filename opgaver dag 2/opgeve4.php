<?php

$alder=rand(-100,200);
echo $alder. '<br>';
if ($alder <0 OR $alder >130) {
echo 'ugyldig alder';
}
elseif ($alder<18) {
echo 'Ungdomsrabat';
}
elseif ($alder >18 AND $alder <65) {
echo 'ingen rabat';
}
else {
echo '<meta charset="utf-8" /> Du får pensionistrabat';
}
?>