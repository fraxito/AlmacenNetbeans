<?php ?>

      <div class="row">
            <div class="col-xs-12" >
             
<h1>Soy pogramador $5&dhsafshf""kdjfd</h1><br>
<nav class="horizontal-menu">
    <ul>
        <li>
            <a class="dropdown-toggle" href="#">Ponte a prueba</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a href="#">pincha</a></li>
                <li><a href="#">Si</a></li>
                <li><a href="#">te</a></li>
                <li><a href="#">Atreves</a></li>
                <li><i class="icon-arrow-down-right"></i><a href="http://www.homerswebpage.com/">Aquí</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">Hola</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a href="#">Ke</a></li>
                <li><a href="#">Ase</a></li>
                <li><a href="#">Tio</a></li>
                
            </ul>
        </li>
    </ul>
</nav>
                <div class="tile half bg-red" style="border-radius: 50%">
                    
                        <div class="tile-content icon">
                            <i class="icon-battery-full"></i>
                        </div>
                </div>
            </div>
      </div>
                <div class="carousel">
    <div class="slide">
        <img src="Grupo5/imgEmilio/joda.jpg">
    </div>
 
    <div class="slide">
        <img src="Grupo5/imgEmilio/yo.jpg">
    </div>
 
    <a class="controls left"><i class="icon-arrow-left-3"></i></a>
    <a class="controls right"><i class="icon-arrow-right-3"></i></a>
</div>
                <h4>Vota si molo</h4>         
<div id="estrellas" class="rating">
    <ul>
        <li class="rated"></li>
        <li class="rated"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <span class="score-hint"></span>
</div>

<script>
$(function(){
    $("#estrellas").rating({
        static: false,
        score: 90000001,
        stars: 5,
        showHint: true,
        hints: ['bad', 'poor', 'regular', 'good', 'gorgeous'],
        showScore: true,
        scoreHint: "Current score: ",
    });
});
</script>
<script>
$('.carousel').carousel();

$('.carousel').carousel({
    auto: false,
    period: 5000,
    duration: 2000,
    markers: {
        type: "square"
    }
});
</script>



