var FormWizard = function () {
    var wizardContent = $('#wizard');
    var wizardForm = $('#form');
    var initWizard = function () {
        // function to initiate Wizard Form
        wizardContent.smartWizard({
            selected: 0,
            keyNavigation: false,
            onLeaveStep: leaveAStepCallback,
            onShowStep: onShowStep,
        });
        var numberOfSteps = 0;
        animateBar();
        initValidator();
    };
    var animateBar = function (val) {
        if ((typeof val == 'undefined') || val == "") {
            val = 1;
        };
        numberOfSteps = $('.swMain > ul > li').length;
        var valueNow = Math.floor(100 / numberOfSteps * val);
        $('.step-bar').css('width', valueNow + '%');
    };
    var initValidator = function () {
        $.validator.addMethod("cardExpiry", function () {
            //if all values are selected
            if ($("#card_expiry_mm").val() != "" && $("#card_expiry_yyyy").val() != "") {
                return true;
            } else {
                return false;
            }
        }, 'Please select a month and year');
        $.validator.setDefaults({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
                    error.appendTo($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: ':hidden',
            rules: {
                estado: {
                    required: true,
                },
                municipio: {                    
                    required: true,
                },
                parroquia: {                    
                    required: true,
                },
                sector: {
                    minlength: 3,
                    required: true,
                },
                nombre_comunidad: {
                    minlength: 3,
                    required: true,
                },
                direccion: {
                    minlength: 3,
                    required: true,
                },
                nombres: {
                    minlength: 3,
                    required: true,
                },
                 apellidos: {
                    minlength: 3,
                    required: true,
                },
                cedula: {
                    minlength: 6,
                    number: true,
                    required: true,
                },
                fecha_nacimiento: {
                    required: true,
                },
                nacionalidad:{
                     required: true,
                },
                edad: {
                    minlength: 1,
                    required: true
                },
                sexo: {
                    required: true
                },
                cne: {
                    required: true,
                },
                tiempo_comunidad: {
                    required: true,
                },
                incapacitado: {
                    required: true,
                },
                pensionado: {
                    required: true,
                },
                institucion: {
                    minlength: 3,
                },
                estado_civil: {
                    required: true,
                },
                nivel_instruccion: {
                    required: true,
                },
                profesion: {
                    required: true,
                },
                trabaja: {
                    required: true,
                },
                clasificacion_ingreso_familiar: {
                    required: true,
                },
                ingreso_mensual: {
                    required: true,
                    number: true,
                }



            },
            messages: {
                estado: "Por favor ingrese el Estado",
                municipio: "PPor favor ingrese el nombre de su Municipio",
                parroquia: "Por favor ingrese el nombre de su Parroquia",
                sector: "Por favor ingrese el nombre del Sector donde vive",
                nombre_comunidad: "Por favor ingrese el nombre de su comunidad",
                direccion: "Por favor ingrese su direccion",
                nombres: "Por favor ingrese su nombre",
                apellidos: "Por favor ingrese los apellidos",
                cedula: "Por favor ingrese el numero de cedúla",
                fecha_nacimiento: "Por favor ingrese la fecha de nacimiento",
                edad: "Por favor ingrese la edad",
                sexo:"Por favor seleccione el sexo",
                CNE: "Por favor seleccione el campo",
                tiempo: "Por favor ingrese el tiempo",
                incapacitado: "Por favor seleccione si es incapacitado",
                pensionado: "Por favor seleccione la opción",
                telfcel: "Por favor ingrese el telefono",
                telfhab: "Por favor ingrese el telefono",
                telfofic: "Por favor ingrese el telefono",

                estado_civil: "Por favor seleccione su estado civil",
                nivel_de_instruccion: "Por favor seleccione el nivel de instrucción",
                profesion: "Por favor ingrese la profesión",
                trabaja: "Por favor ingrese el campo",
                clasificacion_ingreso_familiar: "Por favor seleccione el campo",
                ingreso_mensual: "Por favor ingrese el campo",
                email: {
                    required: "Se necesita un email de contacto",
                    email: "Debe tener un formato name@dominio.com"
                },
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
            }
        });
    };
    var displayConfirm = function () {
        $('.display-value', form).each(function () {
            var input = $('[name="' + $(this).attr("data-display") + '"]', form);
            if (input.attr("type") == "text" || input.attr("type") == "email" || input.attr("type") == "date" ||input.is("textarea")) {
                $(this).html(input.val());
            } else if (input.is("select")) {
                $(this).html(input.find('option:selected').text());
            } else if (input.is(":radio") || input.is(":checkbox")) {

                $(this).html(input.filter(":checked").closest('label').text());
            } else if ($(this).attr("data-display") == 'card_expiry') {
                $(this).html($('[name="card_expiry_mm"]', form).val() + '/' + $('[name="card_expiry_yyyy"]', form).val());
            }
        });
    };
    var onShowStep = function (obj, context) {
        $(".next-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goForward");
        });
        $(".back-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goBackward");
        });
        $(".finish-step").unbind("click").click(function (e) {
            e.preventDefault();
            onFinish(obj, context);
        });
    };
    var leaveAStepCallback = function (obj, context) {
        return validateSteps(context.fromStep, context.toStep);
        // return false to stay on step and true to continue navigation
    };
    var onFinish = function (obj, context) {
        if (validateAllSteps()) {
            $('.anchor').children("li").last().children("a").removeClass('wait').removeClass('selected').addClass('done');
            wizardForm.submit();
        }
    };
    var validateSteps = function (stepnumber, nextstep) {
        var isStepValid = false;
        if (numberOfSteps > nextstep && nextstep > stepnumber) {
            // cache the form element selector
            if (wizardForm.valid()) { // validate the form
                wizardForm.validate().focusInvalid();
                $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").removeClass('wait');
                //focus the invalid fields
                animateBar(nextstep);
                isStepValid = true;
                return true;
            };
        } else if (nextstep < stepnumber) {
            $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").addClass('wait');
            animateBar(nextstep);
            return true;
        } else {
            $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").removeClass('wait');
            displayConfirm();
            animateBar(nextstep);
            return true;
        };
    };
    var validateAllSteps = function () {
        var isStepValid = true;
        // all step validation logic
        return isStepValid;
    };
    return {
        init: function () {
            initWizard();
        }
    };
}();