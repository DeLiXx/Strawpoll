<?php
$aIncrFile = fopen("autoIncrement.txt", "w") or die("Unable to open file!");
$aIncr = fread($aIncrFile,filesize("autoIncrement.txt"));
if ($aIncr == "")  $aIncr = 0;
$aIncr = $aIncr + 1;
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("../Strawpolls/" + $aIncr, "w");
?>