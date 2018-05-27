<?php
    $id = $_GET["id"];
    $x = $_GET["x"];

    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "r+b");
    $fText = fread($fileHandle, 9999);

    $args =unserialize (fread($fileHandle, 9999));

    $args[$x * 2 + 1] += 1;
    fwrite($fileHandle, serialize($args));
    fclose($fileHandle);
    return NULL;
?>