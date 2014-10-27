<?php
?>
<div class="row">
    <div class="col-xs-12" >
        <div class="tile bg-darkPink">
            <div class="tile-content icon">
                <i class="icon-camera"></i>
            </div>
            <div class="tile-status">
                <span class="name">Photos</span>
            </div>
        </div>
        <div class="tile half bg-red" style="border-radius: 50%">
            <div class="tile-content icon">
                <i class="icon-bluetooth"></i>
            </div>
        </div>
        <div class="tile double bg-amber">
    <div class="tile-content icon">
        <a href="http://www.homerswebpage.com/"><i class="icon-play-alt"></a></i>
    </div>
    <div class="brand bg-black">
        <span class="label fg-white">Player</span>
        <div class="badge bg-darkRed paused"></div>
    </div>
</div>
<div class="rating">
   
    <div 
        class="rating"
        data-role="rating"
        data-static="false"
        data-score="3"
        data-stars="5"
        data-show-score="true">
    </div>
</div>
        <div class="times" data-role="times" data-alarm="hh:mm:ss"></div>
      
        <div class="calendar small" data-role="calendar" data-week-start="1"></div>
    </div>
</div> 
<br><br><br><br>

<script>
$(function(){
    $("#rating_1").rating({
        static: false,
        score: 2,
        stars: 5,
        showHint: true,
        hints: ['bad', 'poor', 'regular', 'good', 'gorgeous'],
        showScore: true,
    });
    $("#componennt_id").times().bind('timesalarm', function(){...});
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
});
</script>
