<?php
    $id = $_GET["id"];
    $x = $_GET["x"];

    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "rb");
    $fArray = unserialize (fread($fileHandle, 9999));
    fclose($fileHandle);

    $voteValue = (int)$fArray[$x * 2];
    $voteValue ++;
    $fArray[$x * 2] = "" . $voteValue;
    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "wb");
    fwrite($fileHandle, serialize($fArray));
    fclose($fileHandle);
?>