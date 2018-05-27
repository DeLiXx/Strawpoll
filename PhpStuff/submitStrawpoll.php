<?php

$aIncrFile = fopen('autoIncrement.txt', 'rb');
$aIncr = (int)fread($aIncrFile, 9999);
$aIncr += 1;
fclose($aIncrFile);

$aIncrFile = fopen('autoIncrement.txt', 'wb');
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("..\\Strawpolls\\"  . $aIncr . ".txt", "wb");
fwrite($strawFile, $_GET["title"] . "\r");
for($i=1; $i < $_GET["maxRow"]; $i++)
    fwrite($strawFile, $_GET["selectionRow" . $i] . ";0\r");
fclose($strawFile);

header("Location: \\..\\?id=" . $aIncr);
exit;
?>