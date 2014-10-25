<?php 
function chequeaFichero ($nombre_fichero){
    if (file_exists($nombre_fichero)) {
        echo '<div class = "caja cajaVerde">'.$nombre_fichero.'</div>';
    } else {
        echo '<div class = "caja cajaRoja">'.$nombre_fichero.'</div>';
    }
}
function chequea ($nombre_fichero){
    $existe = false;
    if (file_exists($nombre_fichero)) {
        $existe = true;
    } 
    return $existe;
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
        <style>
        .caja {
            width:164px;
            height:24px;
            text-align: center;
        }
        .cajaRoja{background-color: #f00;}
        .cajaVerde{background-color: #0f0;}    
        </style>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap3.min.js"></script>

        
    </head>
    <body>
        <br>
        <?php 
        $grupos = array(
                    array(24,13,15,4,9),
                    array(5,1,3,7,10),
                    array(12,14,11,16,6),
                    array(8,2,18,19,22),
                    array(20,21,17,23,25)
            );
        $array_alumnos = array('','A7893','A4989','B5885','C2281','C3972','C0920','C9039','V2084','D7741','F9965',
                               'F4575','G5102','G2190','H6577','L5556','L0476','L7139','M1421','M1786','M1721',
                               'P5155','P5010','R0481','S2612','S8418');
        
        for ($i=1; $i<6; $i++){
            echo '<div class="container" id="GRUPO'.$i.'">

                     <div class="row">
                             <div class="col-xs-2" >
                                 ';
                                for ($j=0; $j<5; $j++){
                                     chequeaFichero('GRUPO'.$i.'/'.$array_alumnos[$grupos[$i-1][$j]].'.php');
                                     echo '<br>';
                                }
                        echo '</div>
                             <div class="col-xs-10">
                                ';
                                for ($j=0; $j<5; $j++){
                                     if (chequea('GRUPO'.$i.'/'.$array_alumnos[$grupos[$i-1][$j]].'.php')){
                                         require 'GRUPO'.$i.'/'.$array_alumnos[$grupos[$i-1][$j]].'.php';   
                                     }
                                     echo '<hr><br>';
                                }
                        echo '</div>
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