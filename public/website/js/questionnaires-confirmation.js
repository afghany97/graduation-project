$("document").ready(function (){
    'use strict';

    $("#sub-button").click(event => {

        event.preventDefault();

        swal(`Are you sure to make questionnaire for ${window.subject.subject.name}?`, {
            buttons: {
                yes: "okay",
                no:"Cancel",
            },
        })
            .then((value) => {

                switch (value) {

                    case "yes":

                        const array = window.data.attributes;

                        array.pop();
                        array.pop();
                        array.pop();

                        const length = array.length;

                        const array_ar = window.data_ar.attributes;

                        const values = ['1','2','3','4','5'];

                        let valid = true;

                        for (var i = 0; i < length; i++) {

                            let attribute = array[i];

                            var radioValue = $(`input[name='${attribute}']:checked`).val();

                            if (!values.includes(radioValue)) {

                                flash(`رجاء ملئ خانه ${array_ar[attribute]}`, 'danger');

                                valid = false;

                                break;
                            }

                        }

                        if( valid && $("#questionnaire-form").submit())
                        {
                            swal("Done!", "Questionnaire Created Successfully", "success");
                        }


                        break;

                    default:
                }
            });

    });

});
