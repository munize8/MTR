function add_account(){
    $('#new-account-form').submit();
}


function deActivate(href){
    bootbox.confirm("Are you sure?", function(result) {
        if(result)
            window.location.href = href;
    }); 
}

function reActivate(href){
    bootbox.confirm("Are you sure?", function(result) {
        if(result)
            window.location.href = href;
    }); 
}