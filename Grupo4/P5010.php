<br>
<div class="row" >
    
    
    <div class="input-control switch">
        <label>
            <p id="aviso">Pulsame o muere</p>
            <input id="chequea" onclick="aparece()" type="checkbox"  />
            <span class="check"></span>
        </label>
    </div>
    <div class="balloon bottom" id="globo">Pulsa aqui para ver el contenido</div>
    
    
<!--    Aqui va todo lo que va ir apareciendo en la pagina-->
            <div class="col-xs-12" id="tienda" style="display: none">
<!--               Aqui empieza la barra de navegacion-->



<!--Aqui acaba-->

                <div class="tile bg-darkPink" id="git">
                    <div class="tile-content icon" onclick="muestragit()">
                            <i  class="icon-github"></i>
                        </div>
                        <div class="tile-status">
                            <span class="name">Muestrame a Git
                        </div>
                </div>
                

            <div id="fotos"class="tile double" style="display: none" >
                <div class="tile-content image-set">
                    <img src="Grupo4/imgP5010/gato1.png">
                    <img src="Grupo4/imgP5010/gato2.jpeg">
                    <img src="Grupo4/imgP5010/gato3.png">
                    <img src="Grupo4/imgP5010/gato4.jpg">
                    <img src="Grupo4/imgP5010/gato5.jpg">
                </div>
            </div>

        <div id="fin" class="tile half bg-red" style="display: none" >
                        <div class="tile-content icon" onclick="acabose()">
                            <i id="icono"class="icon-exit"></i>
                        </div>
                        
                        
                </div>
                
            </div>
    
        </div>

<script>

function aparece(){
        $('#tienda').fadeIn('slow');
        $('#aviso').remove();
        $('#globo').remove();
        $("#chequea").attr('disabled', 'disabled');
        
    }
    
    function muestragit(){
        $('#fotos').fadeIn();
        $('#fin').fadeIn();
        
    }
    
    function acabose(){
        $('#fotos,#git,#fin').fadeOut('slow');
        
        
    }
                
           


</script>