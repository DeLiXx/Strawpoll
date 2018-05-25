<?php
/*
$x = fopen('autoIncrement.txt', 'rb');
$y = fread($x, 9999);

echo $y;
fclose($x);
*/
$aIncrFile = fopen('autoIncrement.txt', 'wb');
$aIncr = (int)fread($aIncrFile, 9999);
echo $aIncr;
$aIncr += 1;
echo $aIncr;
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("../Strawpolls/" + $aIncr, "wb");
fclose($strawFile);

?>