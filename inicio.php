<?php 
function chequeaFichero ($nombre_fichero){
    if (file_exists($nombre_fichero)) {
        echo '<div class = "caja cajaVerde">'.$nombre_fichero.'</div>';
    } else {
        echo '<div class = "caja cajaRoja">'.$nombre_fichero.'</div>';
    }
}
?>    
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRUEBA ALMACÉN GIT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap3.min.js"></script>
        <style>
        .caja {
            width:128px;
            height:24px;
            text-align: center;
        }
        .cajaRoja{background-color: #f00;}
        .cajaVerde{background-color: #0f0;}    
        </style>
        
    </head>
    <body>
        <?php 
        for ($i=1; $i<5; $i++){
            
        
   echo '<div class="container" id="GRUPO'.$i.'">

            <div class="row">
                    <div class="col-xs-2" >
                        <br><br>';
                            chequeaFichero('GRUPO'.$i.'/PEPErtyrtyrty');
                            echo '<br>';
                            chequeaFichero('GRUPO'.$i.'/index.php');                                  
               echo '</div>
                    <div class="col-xs-10">
                        
                    </div>
            </div>
            
           
        </div>
        <hr>
        ';
        } //del for
        ?>
    </body>
</html>

<script>
</script>