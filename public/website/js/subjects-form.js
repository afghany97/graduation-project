$("document").ready(function (){
    'use strict';

    $("#cancel_btn").click( event => {

        event.preventDefault();

        $("input[name='subject']").prop('checked',false);

    });

    $("#submit_btn").click( event => {

        event.preventDefault();

        let subject_name = $("input[name='subject']:checked").val();

        if(subject_name != undefined && typeof subject_name == 'string'){

            window.location.href = `questionnaire/create/${subject_name}`;
        }else{
            flash('رجاء اختار الماده','danger');
        }
    });

});