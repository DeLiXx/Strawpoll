<?php
/*
$x = fopen('autoIncrement.txt', 'rb');
$y = fread($x, 9999);

echo $y;
fclose($x);
*/
$aIncrFile = fopen("autoIncrement.txt", "wb");
$aIncr = fread($aIncrFile, 9999);
if ($aIncr == "")  $aIncr = 0;
$aIncr += 1;
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("../Strawpolls/" + $aIncr, "wb");
fclose($strawFile);

?>