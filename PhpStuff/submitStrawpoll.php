<?php

$aIncrFile = fopen('autoIncrement.txt', 'rb');
$aIncr = (int)fread($aIncrFile, 9999);
$aIncr += 1;
fclose($aIncrFile);

$aIncrFile = fopen('autoIncrement.txt', 'wb');
fwrite($aIncrFile, $aIncr);
fclose($aIncrFile);

$strawFile = fopen("..\\Strawpolls\\"  . $aIncr . ".txt", "wb");
$arr = array($_GET["title"]);
for($i=1; $i < $_GET["maxRow"]; $i++)
    $arr = array_push( $arr, array($_GET["selectionRow" . $i], 0));
fwrite($strawFile, serialize($arr));
fclose($strawFile);

header("Location: \\..\\?id=" . $aIncr);
exit;
?>