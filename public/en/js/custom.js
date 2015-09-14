(function(){
    $("#formAccepted").change(function(){
        if($("#formAccepted").prop('checked', true)){
            $("#formSubmitBtn").prop('disabled', false);
        }
    });

})();
