<?php
echo '<meta charset="utf-8" />';
$lgd=strlen ($_GET["navn"]);
$bagfra=strrev ($_GET["navn"]);
$alder=$_GET["alder"]+5;

echo 'Velkommen '.$_GET["navn"].' Der er '.$lgd.' bogstaver i dit navn og dit navn stavet bagfra er '.$bagfra.'.<br>';
echo 'om 5 år er du '.$alder.' år gammel.';

?>