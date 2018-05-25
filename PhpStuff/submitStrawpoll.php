<?php
$aIncrFile = fopen("autoIncrement.txt", "w") or die("Unable to open file!");
$aIncr = fread($aIncrFile,filesize("autoIncrement.txt"));
if ($aIncr == "") { $aIncr = 0};
fwrite($aIncrFile, &aIncr + 1);
fclose($aIncrFile);


?echo("worked");
?>