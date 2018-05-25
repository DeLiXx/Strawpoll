<?php
$t = fopen("autoIncrement.txt", "rb");

var_dump(fread($t, filesize("autoIncrement.txt"));
die();

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