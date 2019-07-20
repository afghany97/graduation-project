$("document").ready(function (){
    'use strict';
    $(".ok-button").click(function(){
        $(".pop-background").addClass('d-none');
    });

    $(".cancel-button").click(function(event){
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
});