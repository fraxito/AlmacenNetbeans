<?php 
?>
<div class="container-fluid">
    <div class="row-fluid" id="banner">
<!--        /////////////////// INSERTAMOS UN NAVEGADOR ///////////////////////////-->
       
<nav class="navigation-bar">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="#">METRO UI CSS</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a href="#">Home</a></li>
                <li><a href="#">Abrir Archivo</a></li>
                <li class="divider"></li>
                <li><a href="#">Imprimir?</a></li>
                <li class="divider"></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </div>
 
        <span class="element-divider"></span>
        <a class="element brand" href="#"><span class="icon-spin"></span></a>
        <a class="element brand" href="#"><span class="icon-printer"></span></a>
        <span class="element-divider"></span>
 
        <div class="element input-element">
            <form>
                <div class="input-control text">
                    <input type="text" placeholder="Search...">
                    <button class="btn-search"></button>
                </div>
            </form>
        </div>
 
        <div class="element place-right">
            <a class="dropdown-toggle" href="#">
                <span class="icon-cog"></span>
            </a>
            <ul class="dropdown-menu place-right" data-role="dropdown">
                <li><a href="#">Productos</a></li>
                <li><a href="#">Descargas</a></li>
                <li><a href="#">Soporte</a></li>
                <li><a href="#">Compra¡¡</a></li>
            </ul>
        </div>
        <span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>
        <span class="element-divider place-right"></span>
        <button class="element image-button image-left place-right">
            Jorge Lainez
            <img src="Grupo3/imagenesL0476/p.png"/>
        </button>
    </nav>
</nav>
        
<!--        //////////////////////// FIN NAVEGADOR ////////////////////////////-->
        
<!--///////////////////////////////// CRONO ////////////////////////////////////-->

<div class="countdown" data-role="countdown"
      data-style-background="bg-lightBlue"></div>

<!--//////////////////////////////////// FIN //////////////////////////////////////-->

<!--///////////////// LE METEMOS UN RATING /////////////////////////////////////////////-->
<div class="rating" id="rating_2">
    <ul>
        <li class="rated"></li>
        <li class="rated"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <span class="score-hint"></span>
</div>
<!--////////////////////FIN RATING/////////////////////////////////////////////////////-->

    </div>
    <div class="row">
            <div class="col-xs-12" >
                <div class="tile bg-darkPink">
                        <div class="tile-content icon">
                            <i class="icon-cart-2"></i>
                        </div>
                        <div class="tile-status" >
                            <span class="name">Tienda</span>
                        </div>
                    
                </div>
                <div class="tile half bg-red" style="border-radius: 50%">
                        <div class="tile-content icon">
                            <i class="icon-rocket"></i>
                        </div>                    
                </div>
                
                <div class="tile double">
                <div class="tile-content image-set">
                    <img src="imagenes/1.jpg">
                    <img src="imagenes/2.jpg">
                    <img src="imagenes/3.jpg">
                    <img src="imagenes/4.jpg">
                    <img src="imagenes/5.jpg">
                </div>
            </div>
            </div>    
        </div>
<!--    /////////// INSERTAMOS BOTONES INÚTILES ///////////////////////////////-->
<div class="row-fluid">
    <button class="image-button primary">
    Descargar
    <img src="images/download-32.png" class="bg-cobalt">
</button>
<button class="image-button danger">
    GitHub
    <i class="icon-github bg-red"></i>
</button>
<button class="image-button bg-darkGreen fg-white image-left">
    Windows
    <i class="icon-windows bg-green fg-white"></i>
</button>
<button class="image-button warning image-left">
    Download
    <img src="images/download-32.png" class="bg-cobalt">
</button>
</div>
<!--    /////////////// FIN //////////////////////////////////////////////////-->
</div>

<!--<div class="notice bg-blue fg-white" style="width: 25px;">BUNGA BUNGA ¡¡</div>-->
               
        

<script>
  $(function(){
    $("#rating_2").rating({
        click: function(value, rating){
            rating.rate(value);
        }
    });
});  
    
</script>
            