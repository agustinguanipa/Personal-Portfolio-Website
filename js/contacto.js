$(document).ready(function() {
    $('.contact-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombres: {
                message: 'Ingrese un Nombre Válido',
                validators: {
                    notEmpty: {
                        message: 'El Nombre es Requerido y no puede estar vacío'
                    }
                }
            },
            apellidos: {
                message: 'Ingrese un Apellido Válido',
                validators: {
                    notEmpty: {
                        message: 'El Apellido es Requerido y no puede estar vacío'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'El E-Mail es Requerido y no puede estar vacío'
                    },
                    emailAddress: {
                        message: 'Esta no es una Dirección de Correo Válida'
                    }
                }
            },
            mensaje: {
                message: 'Ingrese un Mensaje Válido',
                validators: {
                    notEmpty: {
                        message: 'El Mensaje es Requerido y no puede estar vacío'
                    },
                    stringLength: {
                        max: 500,
                        message: 'El Mensaje es de Máximo 500 Caracteres'
                    },
                   
                }
            }
        }
    });
});