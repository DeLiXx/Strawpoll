<?php
$x = fopen('autoIncrement.txt', 'rb');
$y = fread($x, 9999);

echo $y;
fclose($x);
/*
$aIncrFile = fopen("autoIncrement.txt", "w");
$aIncr = fread($aIncrFile,filesize("autoIncrement.txt"));
if ($aIncr == "")  $aIncr = 0;
$aIncr += 1;
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("../Strawpolls/" + $aIncr, "w");
fclose($strawFile);
*/
?>