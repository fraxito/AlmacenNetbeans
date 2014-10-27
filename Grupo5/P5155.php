<?php
?>
<div class="row">
    <nav class="navigation-bar dark">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="#">METRO UI CSS</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a href="#">Main</a></li>
                <li><a href="#">File Open</a></li>
                <li class="divider"></li>
                <li><a href="#">Print...</a></li>
                <li class="divider"></li>
                <li><a href="#">Exit</a></li>
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
                <li><a href="#">Products</a></li>
                <li><a href="#">Download</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Buy Now</a></li>
            </ul>
        </div>
        <span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>
        <span class="element-divider place-right"></span>
        <button class="element image-button image-left place-right">
            Ignacio Peña
            <img src="Grupo5/imagenes53815155/7084820.png"/>
        </button>
    </nav>
</nav>
    <br>
    
            <div class="col-xs-12" >
                <div class="tile bg-darkPink">
                        <div class="tile-content icon">
                            <i class="icon-music"></i>
                        </div>
                        <div class="tile-status">
                            <span class="name">Música</span>
                        </div>
                </div>
                <div class="tile half bg-red" style="border-radius: 50%">
                        <div class="tile-content icon">
                            <i class="icon-share-3"></i>
                        </div>
                </div>

                <div class="tile double live" data-role="live-tile" data-effect="slideLeft">
                    <div class="tile-content"><img src="imagenes/1.jpg"></div>
                    <div class="tile-content"><img src="imagenes/2.jpg"></div>
                    <div class="tile-content"><img src="imagenes/3.jpg"></div>
                    <div class="tile-content"><img src="imagenes/4.jpg"></div>
                    <div class="tile-content"><img src="imagenes/5.jpg"></div>
                </div>      
                
                
            </div>
            <button class="button" id="createWindow">Create Window</button>
            <button class="button success" id="notify_btn_1">Notificaciones</button>
            <script>
             $("#createWindow").on('click', function(){
            $.Dialog({
                shadow: true,
                overlay: false,
                icon: '<span class="icon-rocket"></span>',
                title: 'Title',
                width: 500,
                padding: 10,
                content: 'HUEHUEHUEHUEHUEHUEHUEHUEHUEHUEHUEHUE'
            });
        });
            </script>
            
            
            <script>
                $('#notify_btn_1').on('click', function(){
                    var not2 = $.Notify.show("Metro UI CSS is awesome!!!");
                    var not3 = $.Notify.show("Metro UI CSS is awesome!!!", "Info...");
                });
            </script>
            <div class="countdown" data-role="countdown"
                 data-blink="false" style="font-size: 30px"></div>
</div>




