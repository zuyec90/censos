var FormValidator = function () {
    // función de validación 2 
    var runValidator2 = function () {
        var form2 = $('#form2');
        var errorHandler2 = $('.errorHandler', form2);
        var successHandler2 = $('.successHandler', form2);
        $.validator.addMethod("getEditorValue", function () {
            $("#editor1").val($('.summernote').code());
            if ($("#editor1").val() != "" && $("#editor1").val() != "<br>") {
                $('#editor1').val('');
                return true;
            } else {
                return false;
            }
        }, 'Este campo es requerido.');
        form2.validate({
            errorElement: "span", // contain the error msg in a small tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.hasClass("ckeditor")) {
                    error.appendTo($(element).closest('.form-group'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                nombre: {
                    minlength: 3,
                    required: true
                },
                apellido: {
                    minlength: 3,
                    required: true
                },
                cedula: {
                    minlength: 8,
                    required: true
                },
                fecha_nacimiento: {
                    minlength: 8,
                    required: true
                },
                edad: {
                    minlength: 3
                    required: true
                },
                sexo: {
                    required: true
                },
                CNE: {
                    required: true
                },
                tiempo: {
                    required: true
                },
                incapacitado: {
                    required: true
                },
                tipo: {
                    required: false
                    minlength: 20,
                },
                pensionado: {
                    required: true
                }
                institucion: {
                    required: false
                    minlength: 20,
                }
                telfcel: {
                    required: true
                    minlength: 10,
                     number: true,
                }
                telfhab: {
                    required: true
                    inlength: 10,
                     number: true,
                }
                telfofic: {
                    required: true
                    inlength: 10,
                     number: true,
                }
                email: {
                    required: true,
                    email: true
                }
                estado_civil: {
                    required: true
                }
                nivel_instruccion: {
                    required: true,
                }
                 profesion: {
                    required: true,
                }
                trabaja: {
                    required: true,
                }
                ingreso: {
                    required: true,
                }
                ingreso_mensual: {
                    required: true,
                    number: true,
                }
            },
            messages: {
                nombre: "Por favor ingrese los nombres",
                apellido: "Por favor ingrese los apellidos",
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
                email: {
                    required: "Se necesita un email de contacto",
                    email: "Debe tener un formato name@domain.com"
                }, 
                estado civil: "Por favor seleccione el estado",
                nivel de instruccion: "Por favor seleccione el nivel de instrucción",
                profesion: "Por favor ingrese la profesión",
                trabaja: "Por favor ingrese el campo",
                ingreso: "Por favor seleccione el campo",
                ingreso_mensual: "Por favor ingrese el campo",

     
                
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler2.hide();
                errorHandler2.show();
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
                successHandler2.show();
                errorHandler2.hide();
                // submit form
                //$('#form2').submit();
            }
        });
        $('.summernote').summernote({
            height: 300,
            tabsize: 2
        });
        CKEDITOR.disableAutoInline = true;
        $('textarea.ckeditor').ckeditor();
    };
    return {
        //main function to initiate template pages
        init: function () {
            runValidator2();
        }
    };
}();