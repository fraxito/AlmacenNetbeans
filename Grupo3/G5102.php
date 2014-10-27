<!--menu-->
<div class="row">
        <button id="boton1" class="image-button bg-darkGreen fg-white image-left">
    Picas
    <i class="icon-spades on-right on-left"
style="background: green;
color: white;
border-radius: 50%"></i>


    </button>
    <button id="boton2"class="image-button bg-darkGreen fg-white image-left">
   Rombos
    <i class="icon-clubs on-right on-left"
style="background: green;
color: white;
border-radius: 50%"></i>


    </button>
    <button id="boton3"class="image-button bg-darkGreen fg-white image-left">
    Diamantes
    <i class=" icon-diamonds on-right on-left"
style="background:green;
color: white;
border-radius: 50%"></i>


    </button>
    <button id="boton4"class="image-button bg-darkGreen fg-white image-left">
    Corazones
    <i class=" icon-heart on-right on-left"
style="background:green;
color: white;
border-radius: 50%"></i>


    </button>
</div>


<!--carrusel-->
<div class="row"style="width: 300px; height: 300px">
    <div class="carousel" data-role="carousel" >
        <div class="slide" id="slide1">
            <img src="Grupo3/imgG5102/Fungi.jpg" />
            
        </div>


        <div class="slide" id="slide2">
            <img src="Grupo3/imgG5102/Talisman.jpg" />
            
        </div>
        <div class="slide" id="slide3">
            <img src="Grupo3/imgG5102/Cash.jpg" />
            
        </div>
        <div class="slide" id="slide4">
            <img src="Grupo3/imgG5102/Robo_rally.jpg" />
            
        </div>
        <div class="slide" id="slide5">
            <img src="Grupo3/imgG5102/ricochet.jpg" />
            
        </div>

        <a class="controls left"><i class="icon-arrow-left-3"></i></a>
        <a class="controls right"><i class="icon-arrow-right-3"></i></a>
    </div>
</div>
<div class="row" style="width: 300px; height: 200px">
    <div class="carousel" data-role="carousel" data-height="300">
        <div class="slide" id="slide1">
            
            <div class="description">
                Ut egestas tempor magna, sed rutrum felis fermentum quis. Aliquam congue ultricies elit, sit amet tempor tortor tempor nec.
            </div>
        </div>


        <div class="slide" id="slide2">
            
            <div class="description">
                Ut egestas tempor magna, sed rutrum felis fermentum quis. Aliquam congue ultricies elit, sit amet tempor tortor tempor nec.
            </div>
        </div>
        <div class="slide" id="slide3">
           
            <div class="description">
                Una banda de gangsters se reparte un botín en una nave industrial abandonada. Nadie se pone de acuerdo sobre como hacer el reparto.

Todos sacan pistolas y cuando se quieren dar cuenta se están apuntando entre si... El gangster que termine la partida con más dinero es el que gana... claro, si aún vive para contarlo.
            </div>
        </div>
        <div class="slide" id="slide4">
            
            <div class="description">
                En los limites de la galaxia se encuentra una peculiar y completamente automatizada fábrica. Como uno de los ocho superordenadores de la fábrica, tienes mucha responsabilidad, y sobre todo mucho tiempo libre.....
            </div>
        </div>
        <div class="slide" id="slide5">
            
            <div class="description">
                Ricochet Robots es otra de las obras maestras de Alex Randolph (Inkognito). En él, los jugadores compiten por ser los que encuentran la forma más rápida de mover a los robots del tablero para llevarlos a la casilla objetivo. El que lo haga en menos movimientos será el ganador de cada turno. 
            </div>
        </div>

        
    </div>
</div>
<script>
$("#boton1").on('click', function(){
$.Dialog({
shadow: true,
overlay: false,
icon: '<span class="icon-spades"></span>',
title: 'Fungi',
width: 300,
padding: 10,
content:'<img src="Grupo3/imgG5102/Fungi.jpg" /><p>Un juego muy sabroso para dos jugadores!</p>' 
});
});
$("#boton2").on('click', function(){
$.Dialog({
shadow: true,
overlay: false,
icon: '<span class="icon-clubs"></span>',
title: 'Talisman',
width: 300,
padding: 10,
content:'<img src="Grupo3/imgG5102/Talisman.jpg" /><p>Un juego de aventuras!</p>' 
});
});
$("#boton3").on('click', function(){
$.Dialog({
shadow: true,
overlay: false,
icon: '<span class="icon-diamonds"></span>',
title: 'Cash',
width: 300,
padding: 10,
content:'<img src="Grupo3/imgG5102/Cash.jpg" /><p>Se el primero en disparar!</p>' 
});
});
$("#boton4").on('click', function(){
$.Dialog({
shadow: true,
overlay: false,
icon: '<span class="icon-heart"></span>',
title: 'Robo Rally',
width: 300,
padding: 10,
content:'<img src="Grupo3/imgG5102/Robo_rally.jpg" /><p>Lleva a tu robot a la meta!</p>' 
});
});


</script>
   