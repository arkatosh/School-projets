<?php

$alder=16;

if ($alder>17)
{
echo 'du har stemmeret';
} elseif ($alder=='17')
{
echo '<meta charset="utf-8" /> du har stemmeret om et år';
} else {
echo 'du har ikke stemmeret';
}
?>