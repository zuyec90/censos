var FormValidator = function () {
    var runValidator1 = function () {
        var form1 = $('#form');
        var nombre = $('.errorHandler', form1);
        var mensaje = $('.successHandler', form1);
        $('#form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            ignore: "",
            rules: {
                nombre: {
                minlength: 6,
                required: true
                },
                destino: {
                minlength: 10,
                required: true
                },
                mensaje: {
                minlength: 10,
                required: true
                },
            },
            messages: {
                nombre: "Por favor ingrese un nombre ",
                destino: "Debe seleccionar un destinatario",
                mensaje: "Debe agregar algun mensaje",
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                mensaje.hide();
                nombre.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                mensaje.show();
                nombre.hide();
                // submit form
                $('#form').submit();
            }
        });
    };