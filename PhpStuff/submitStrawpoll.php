<?php

$aIncrFile = fopen('autoIncrement.txt', 'rb');
$aIncr = (int)fread($aIncrFile, 9999);
echo $aIncr;
$aIncr += 1;
echo $aIncr;
fclose($aIncrFile);

$aIncrFile = fopen('autoIncrement.txt', 'wb');
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("..\\Strawpolls\\"  . $aIncr . ".txt", "wb");
fwrite($strawFile, $_GET["title"] . "\r\n");
for($i=1; $i < $_GET["maxRow"]; $i++)
    fwrite($strawFile, $_GET["selectionRow" . $i] . ";0\r\n");
fclose($strawFile);

header("Location: \\..\\?id=" . $aIncr);
exit;
?>