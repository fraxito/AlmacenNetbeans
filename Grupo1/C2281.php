<!--   aqui os dejo un ejemplo de lo que se puede hacer con http://metroui.org.ua/
        hay más ejemplos en http://metroui.org.ua/examples.html-->

<br> 
<div class="row">
    <div class="col-xs-12" >
        <div class="tile bg-darkPink">
            <div class="tile-content icon">
                <i class="icon-android"></i>
            </div>
            <div class="tile-status">
                <span class="name">Tienda</span>
            </div>
        </div>
        <div class="tile half bg-red" style="border-radius: 50%">
            <div class="tile-content icon">
                <i class="icon-star"></i>
            </div>
        </div>
        <div class="tile double">
            <div class="tile-content image-set">
                <img src="Grupo1/imagenesKarrak/images.jpg">
                <img src="Grupo1/imagenesKarrak/flanders.jpg">
                <img src="Grupo1/imagenesKarrak/flanders2.jpg">
                <img src="Grupo1/imagenesKarrak/Flanders_the_Devil.png">
                <img src="Grupo1/imagenesKarrak/flanders1.jpg">
            </div>

        </div>
        <div class="tile-area-lightPink">
            <div class="calendar small" data-role="calendar" data-locale="zhCN"></div>

        </div>

        

    </div>



</div>
<br>
<script>
$(function(){
    var cal = $(".calendar").calendar({
        multiSelect: true,
        getDates: function(data){
            var r = "", out = $("#calendar-output").html("");
            $.each(data, function(i, d){
                r += d + "<br />";
            });
            out.html(r);
        },
        click: function(d){
            var out = $("#calendar-output2").html("");
            out.html(d);
        }
    });
 
    // Add date
    cal.calendar('setDate', '2013-7-21');
    cal.calendar('setDate', '2013-07-2');
 
    // Remove date
    cal.calendar('unsetDate', '2013-07-2');
});
</script>
