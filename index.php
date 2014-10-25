<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRUEBA ALMACÉN GIT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/bootstrapValidator.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap3.min.js"></script>
        <script src="js/bootstrapValidator.min.js"></script>
        
    </head>
    <body>

        <div class="container">

            <div class="row">
                    <div class="col-xs-2" >
                        
                    </div>
                    <div class="col-xs-10">
                        <br>
                        <form class="form-inline registerForm" action="inicio.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="pwd" placeholder="Contraseña" />
                            </div>
                            <button class="btn btn-warning" type="submit"> Entrar </button>
                        </form>
                    </div>
            </div>
            <hr>
            <div style="background: #efeee5; margin-bottom: 2em;">
                <div class="row">
                        <div class="col-xs-2" >

                        </div>
                        <div class="col-xs-10">
    <!--                        Aqui poneis algo para que quede bonito-->
                            <br>
                            <br>
                            <br>

                        </div>
                </div>            
            </div> 
        </div>
    </body>
</html>

<script>
    //LA VALIDACIÓN BÁSICA
$(document).ready(function() {
    $('.registerForm').bootstrapValidator({
        message: 'Valor incorrecto',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'Nombre de Usuario no válido',
                validators: {
                    notEmpty: {
                        message: 'no puede estar vacío'
                    },
                    stringLength: {
                        min: 4,
                        max: 14,
                        message: 'entre 4 y 14 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_ñÑáéíóúÁÉÍÓÚü]+$/,
                        message: 'Sin caracteres raros por favor'
                    }
                }
            },
            pwd: {
                validators: {
                    notEmpty: {
                        message: 'no se puede dejar en blanco'
                    },
                    stringLength: {
                        min: 1,
                        max: 14,
                        message: 'entre 1 y 14 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_ñÑáéíóúÁÉÍÓÚü]+$/,
                        message: 'Sin caracteres raros por favor'
                    }
                }
            }
        }
    });
});
</script>