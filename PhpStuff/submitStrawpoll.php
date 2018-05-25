<?php
$t = fopen("autoIncrement.txt", "r");


var_dump(fread($t, 10));

fclose($t);
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