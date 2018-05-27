
form class="form-horizontal formular" action="PhpStuff/submitStrawpoll.php" method="GET">
        <fieldset>
            <!-- Form Name -->
            <legend></legend>
            <input name="title" class="form-control pollOption pollOptionHeader" placeholder="Enter question" type="text" />
            <!-- Appended checkbox -->
            <div class="form-group pollGroup">
            </div>
        </fieldset>
        <input type="submit" class="btn btn-success"  value="Create">
        </input>
        <input type="text" class="jqMaxRow" name="maxRow" value="0" style="visibility: hidden"></input>
    </form>

<?php

$id = $_GET["id"]
echo $id
$fileHandle = fopen("..\\Strawpolls\\"  . $aIncr . ".txt", "rb");
$args = explode ("\r", fread($fileHandle, 9999));

$appendHtml = '
    <form class="form-horizontal formular">
            <fieldset>
                <input name="title" class="form-control pollOption pollOptionHeader" placeholder="No Question" type="text" value=' . $args[0] . ' />
                <div class="form-group pollGroup">'

for($x = 1; $x < sizeOf($args); $x++){
    $voteValues = explode(";", $args[$x]);
    $appendHtml .= '
    <div class="col-md-6">
        <label value=' . $voteValues[0] . ' />
    </div>
    <div class="col-md-2">
        <label value=' . $voteValues[1] . ' class="jqVoteRow' . $x . '" />
    </div>
    <div class="col-md-4">
        <input type="button" class="btn btn-info" onclick="incrementVote(' . $id . ',' . $x .'); return false;" />
    </div>'
}

$appendHtml .=  '
        <div class="form-group pollGroup">
        </div>
    </fieldset>
</form>
<input type="text" value="http://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] . '" readonly />'

echo $appendHtml
?>

