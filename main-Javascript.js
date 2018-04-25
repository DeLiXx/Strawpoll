$(document).ready(function() { onLoad() });

function onLoad() {
    var objQuery;
    objQuery = getQuerryParams();

    if( objQuery!= null && objQuery.id != null) {
        //TBA updatesBody with selected strawpoll

        /**/
        alert(objQuery);


        
        }
}

//Returns all URL Query Paramters in a JS-Object
function getQuerryParams() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
}

//Replaces Bodyhtml with parameter URL
function updateBody(strHtml) {
    jQuery.get( strHtml, "" ,( function( data ) {
        $( ".body" ).html( data );
      }), "html");
}

function appendToPoll(){
    $(".pollGroup").append(
    "<div class='col-md-12'>" +
    "<div class='input-group'>" +
    "<input name='appendedcheckbox' class='form-control pollOption' placeholder='Enter poll option' type='text' >" +
    "</input>" +
    "</div>"
    );
}