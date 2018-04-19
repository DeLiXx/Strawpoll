$(document).ready(function() { onLoad() });

function onLoad() {
    var objQuery;
    objQuery = getQuerryParams();

    if( objQuery!= null && objQuery.id != null) {
        //TBA updatesBody with selected strawpoll
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