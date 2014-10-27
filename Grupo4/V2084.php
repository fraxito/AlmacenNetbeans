<?php ?>
 
        <div id="contenedor_fran" class="container">
            <div class="row">  
                <div class="col-xs-12">
                    <div class="carousel" id="carousel1" style="width: 100%; height: 200px;">
                        <div class="slide" style="left: 0px;">
                            <img src="Grupo4/imagenes_fran/estatua2.jpg" class="cover1">
                        </div>

                        <div class="slide" style="left: -508px; display: block;">
                            <img src="Grupo4/imagenes_fran/estatua3.jpg" class="cover1">
                        </div>

                        <div class="slide" style="left: -508px; display: block;">
                            <img src="Grupo4/imagenes_fran/estatua1.jpg" class="cover1">
                        </div>

                        <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                        <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                        <div class="markers default"><ul><li class="active"><a href="javascript:void(0)" data-num="0"></a></li><li class=""><a href="javascript:void(0)" data-num="1"></a></li><li class=""><a href="javascript:void(0)" data-num="2"></a></li></ul></div></div>
                    <script>
                        $(function () {
                            $("#carousel1").carousel({
                                height: 200
                            });
                        })
                    </script>
                </div>
            </div>
            <div style="height: 100px;"></div>
            <div class="row">

                <div class="col-xs-3">
                    <h3>Light style</h3>
                    <nav class="sidebar light">
                        <ul>
                            <li class="title">Items Group 1</li>
                            <li class="active"><a href="#"><i class="icon-home"></i>Inicio</a></li>
                            <li class="stick bg-red"><a href="#"><i class="icon-cog"></i>Layouts</a></li>
                            <li class="stick bg-yellow">
                                <a class="dropdown-toggle" href="#"><i class="icon-tree-view"></i>Sub menu</a>
                                <ul class="dropdown-menu" data-role="dropdown">
                                    <li><a href="">Subitem 1</a></li>
                                    <li><a href="">Subitem 2</a></li>
                                    <li><a href="">Subitem 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Subitem 4</a></li>
                                    <li class="disabled"><a href="">Subitem 4</a></li>
                                </ul>
                            </li>
                            <li class="stick bg-green"><a href="#">Thread item</a></li>
                            <li class="disabled"><a href="#">Disabled item</a></li>

                            <li class="title">Items Group 2</li>
                            <li><a href="#">Other Item 1</a></li>
                            <li><a href="#">Other item 2</a></li>
                            <li><a href="#">Other item 3</a></li>
                            <li>
                                <a class="dropdown-toggle" href="#">Sub menu 2</a>
                                <ul class="dropdown-menu" data-role="dropdown">
                                    <li><a href="">Subitem 1</a></li>
                                    <li><a href="">Subitem 2</a></li>
                                    <li><a href="">Subitem 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--                TEXTO-->
                <div class="col-xs-5" style="overflow: hidden;">
                    <h4>Vertical scroll</h4>
                    <div class="scrollbar" style="width: 100%; height: 600px; padding: 0px 20px 0px 0px;"><div id="scrollbox1" data-role="scrollbox1" data-scroll="vertical" style="position: relative; top: 0px;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing andLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div><div class="scrollbar-v" style="height: 355px;"><div class="scrollbar-v-up"></div><div class="scrollbar-v-down"></div><div class="scrollbar-line-v" style="height: 323px;"><div class="scrollbar-line-v-btn" style="height: 197.008503401361px; top: 0px;"></div></div></div></div>
                </div>
                <!--                CALENDARIO-->
                <div class="col-xs-4">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-10"><div class="calendar small" data-role="calendar"><table class="bordered"><tbody><tr class="calendar-header"><td class="text-center"><a class="btn-previous-year" href="#"><i class="icon-previous"></i></a></td><td class="text-center"><a class="btn-previous-month" href="#"><i class="icon-arrow-left-4"></i></a></td><td colspan="3" class="text-center"><a class="btn-select-month" href="#">October 2014</a></td><td class="text-center"><a class="btn-next-month" href="#"><i class="icon-arrow-right-4"></i></a></td><td class="text-center"><a class="btn-next-year" href="#"><i class="icon-next"></i></a></td></tr><tr class="calendar-subheader"><td class="text-center day-of-week">Su</td><td class="text-center day-of-week">Mo</td><td class="text-center day-of-week">Tu</td><td class="text-center day-of-week">We</td><td class="text-center day-of-week">Th</td><td class="text-center day-of-week">Fr</td><td class="text-center day-of-week">Sa</td></tr><tr><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="text-center day"><a href="#">1</a></td><td class="text-center day"><a href="#">2</a></td><td class="text-center day"><a href="#">3</a></td><td class="text-center day"><a href="#">4</a></td></tr><tr><td class="text-center day"><a href="#">5</a></td><td class="text-center day"><a href="#">6</a></td><td class="text-center day"><a href="#">7</a></td><td class="text-center day"><a href="#">8</a></td><td class="text-center day"><a href="#">9</a></td><td class="text-center day"><a href="#">10</a></td><td class="text-center day"><a href="#">11</a></td></tr><tr><td class="text-center day"><a href="#">12</a></td><td class="text-center day"><a href="#">13</a></td><td class="text-center day"><a href="#">14</a></td><td class="text-center day"><a href="#">15</a></td><td class="text-center day"><a href="#">16</a></td><td class="text-center day"><a href="#">17</a></td><td class="text-center day"><a href="#">18</a></td></tr><tr><td class="text-center day"><a href="#">19</a></td><td class="text-center day"><a href="#">20</a></td><td class="text-center day"><a href="#">21</a></td><td class="text-center day"><a href="#">22</a></td><td class="text-center day"><a href="#">23</a></td><td class="text-center day"><a href="#">24</a></td><td class="text-center day"><a href="#">25</a></td></tr><tr><td class="text-center day"><a href="#">26</a></td><td class="text-center day today"><a href="#">27</a></td><td class="text-center day"><a href="#">28</a></td><td class="text-center day"><a href="#">29</a></td><td class="text-center day"><a href="#">30</a></td><td class="text-center day"><a href="#">31</a></td><td class="empty"><small class="other-day"></small></td></tr><tr class="calendar-actions"><td colspan="7" class="text-left"><button class="button calendar-btn-today small success">Today</button>&nbsp;<button class="button calendar-btn-clear small warning">Clear</button></td></tr></tbody></table></div></div>
                    
<!--                    TEXTO DEBAJO DEL CALENDARIO-->
                    <div class="col-xs-2"></div>
                    <div class="col-xs-10">
                        <h3>Collapsible</h3>
                        <div class="panel" data-role="panel">
                            <div class="panel-header bg-darkRed fg-white">
                                Lorem Ipsum
                            </div>
                            <div class="panel-content">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div style="height: 100px;"></div>
            <div class="row col-xs-12">
            <div class="balloon right">
                <div class="tab-control padding20" data-role="tab-control">
                    <p class="place-right tertiary-text">Comments are parsed with <a href="https://help.github.com/articles/github-flavored-markdown">GitHub Flavored Markdown</a></p>
                    <ul class="tabs">
                        <li class="active"><a href="#write">Write</a></li>
                        <li><a href="#preview">Preview</a></li>
                    </ul>

                    <div class="frames">
                        <div id="write" class="frame" style="display: block;">
                            <div class="input-control textarea"><textarea data-transform="input-control" placeholder="leave a comment"></textarea></div>
                        </div>
                        <div id="preview" class="frame" style="display: none;">
                            This is preview :)
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
