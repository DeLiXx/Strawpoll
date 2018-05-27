<?php

$voted = $_GET["voted"];
$id = $_GET["id"];
$fileHandle = fopen("..\\Strawpolls\\"  . $id . ".txt", "rb");
$args =unserialize (fread($fileHandle, 9999));
fclose($fileHandle);
$appendHtml = '
    <form class="form-horizontal formular">
            <fieldset>
                <label name="title" class="form-control pollOption pollOptionHeader" placeholder="No Question" type="text" >' . $args[0] . '</label>
                <div class="form-group pollGroup">';
$y = 0;
for($x = 1; $x < sizeOf($args) -1; $x += 2){
    $y++;
    $appendHtml .= '
    <div class="row">
        <div class="col-md-8">
            <label class="form-control pollOption">' . $args[$x] . '</label>
        </div>
        <div class="col-md-2">
            <label class="jqVoteRow' . $x . '" >' . $args[$x + 1] . '</label>
        </div>';

        if ($voted != 1){
            $appendHtml .= '
                <div class="col-md-2">
                    <input type="button" value="Vote" class="btn btn-info" onclick="incrementVote(' . $id . ',' . $y .');" />
                </div>';
        }
    $appendHtml .= '</div>';
}

$appendHtml .=  '
        <div class="form-group pollGroup">
        </div>
    </fieldset>
</form>
</br>
Share:
</br>
<input type="text" value="http://' . $_SERVER[HTTP_HOST] . '?id=' . $id . '" style="width:75%" readonly />';

echo $appendHtml;
?>

