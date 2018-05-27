<?php
    $id = $_GET["id"];
    $x = $_GET["x"];

    $fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "r+b");
    $fText = fread($fileHandle, 9999);

    $votes = (int)explode(";",explode ("|", $fText)[$id])[1] + 1;


    $wildcardString = "";
    for($i = 0; $i < $x; $i++){
        $wildcardString .= "*\r";
    }
?>