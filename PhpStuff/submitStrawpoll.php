<?php
/*
$x = fopen('autoIncrement.txt', 'rb');
$y = fread($x, 9999);

echo $y;
fclose($x);
*/
$aIncrFile = fopen('autoIncrement.txt', 'rb');
$aIncr = (int)fread($aIncrFile, 9999);
echo $aIncr;
$aIncr += 1;
echo $aIncr;
fclose($aIncrFile);

$aIncrFile = fopen('autoIncrement.txt', 'wb');
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("../Strawpolls/" + $aIncr + ".txt", "wb");
fwrite($strawFile, "Nibbers my Nibbers/nYoloololo;509/nTrimoff;20")
fclose($strawFile);

?>