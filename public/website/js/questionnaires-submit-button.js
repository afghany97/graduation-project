$("document").ready(function (){
    'use strict';

    const array = window.data.attributes;

    array.pop();
    array.pop();
    array.pop();

    const length = array.length;

    const values = ['1','2','3','4','5'];

    $("input[type=radio]").change(event => {

        let valid = true;

        for (var i = 0; i < length; i++) {

            let attribute = array[i];

            var radioValue = $(`input[name='${attribute}']:checked`).val();

            if (! values.includes(radioValue)) {

                valid = false;

                break;
            }

        }

        if(valid){

            $("#sub-button").removeAttr('disabled');

        }else{

            $("#sub-button").attr('disabled','disabled');

        }


    });

});