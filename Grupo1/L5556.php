
<div class="row">
    <div class="col-xs-12" >
        <div class="tile bg-darkPink">
            <div class="tile-content icon">
                <i class="icon-star-3"></i>
            </div>
            <div class="tile-status">
                <span class="name">Johnny Bravo</span>
            </div>
        </div>
        <div class="tile half bg-red" style="border-radius: 50%">
            <div class="tile-content icon">
                <i class="icon-cars"></i>
            </div>
        </div>
        <div class="tile double">
            <div class="tile-content image-set">
                <img src="Grupo1/johnnyBravo2.jpg">
                <img src="Grupo1/johnnyBravo4.jpeg">
                <img src="Grupo1/johnnyBravo3.jpeg">
                <img src="Grupo1/johnnyBravo.jpeg">
                <img src="Grupo1/johnnyBravo5.jpeg">
            </div>
        </div>
    </div>
    <div class="calendar"></div>
    <div class="times" data-role="times" ></div>

    
</div>

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
})

</script>


<script>
$("#componennt_id").times({
    style: {
        background: string, //existing class for digit background color
        foreground: string  //existing class for digit foreground color
        divider: string  //existing class for divider foreground color
    },
    blink: true, // blink divider
    alarm: {h:..., m:..., s:...},
    ontick: function(h, m, s){...},
    onalarm: function(){...},
});
</script>
