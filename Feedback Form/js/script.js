$(document).ready(function (){
    $("#vaccination_form").submit( function(){
        var empty = '';
        if($("#name").val()== empty) {
            alert("Your Name need to fill up.");
            return false;
        }else if ($("#track").val()== empty) {
            alert("choose your course track");
            return false;
        } else {
            alert("Result successfully submitted ");
        }
    });
    $("#return").submit( function(){

            alert("You will go back to feedback form ");

    });
});