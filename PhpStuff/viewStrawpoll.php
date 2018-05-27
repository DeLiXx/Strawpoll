<?php

$id = $_GET["id"];
$fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "rb");
$args = explode ("|||", fread($fileHandle, 9999));
fclose($fileHandle);
echo $args;
echo $args[0];
$appendHtml = '
    <form class="form-horizontal formular">
            <fieldset>
                <input name="title" class="form-control pollOption pollOptionHeader" placeholder="No Question" type="text" value="' . $args[0] . '" readonly/>
                <div class="form-group pollGroup">';

for($x = 1; $x < sizeOf($args); $x++){
    $voteValues = explode(";;;", $args[$x]);
    $appendHtml .= '
    <div class="col-md-6">
        <label class="form-control pollOption">' . $voteValues[0] . '</label>
    </div>
    <div class="col-md-2">
        <label class="jqVoteRow' . $x . '" >' . $voteValues[1] . '</label>
    </div>
    <div class="col-md-4">
        <input type="button" value="Vote" class="btn btn-info" onclick="incrementVote(' . $id . ',' . $x .'); return false;" />
    </div>';
}

$appendHtml .=  '
        <div class="form-group pollGroup">
        </div>
    </fieldset>
</form>
<input type="text" value="http://' . $_SERVER[HTTP_HOST] . '?id=' . $id . '" style="width:75%" readonly />';

echo $appendHtml;
?>

