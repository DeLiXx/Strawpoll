<?php
    $id = $_GET["id"];
    $x = $_GET["x"];

    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "rb");
    $fText = fread($fileHandle, 9999);
    
    $args =unserialize (fread($fileHandle, 9999));
    fclose($fileHandle);

    $args[$x * 2 + 1] += 1;
    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "wb");
    fwrite($fileHandle, serialize($args));
    fclose($fileHandle);
    return NULL;
?>