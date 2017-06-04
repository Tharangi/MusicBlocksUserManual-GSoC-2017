<?php
    $PATH_PREFIX = "/musicblocksusermanual-gsoc-2017/?";
?>

<div id="blocks_menu" style="background-color: #ddd;height: 600px; width: 220px; position: absolute; margin-left: 250px; z-index: 1; overflow-y: scroll; visibility: hidden">
    <ul class="nav">
        <li class="manage_heights" style="background-color: #5bc0de; height: 35px">
            <div style="padding-left: 5px; font-weight: 800">
                <img id="menu_header_img" class="images" style="height: 35px;"/><span id="menu_header_title"></span>
                <i class="fa fa-times" style="float: right; margin-right: 5px; margin-top: 3px; cursor: pointer" onclick="hideBlocks()"></i>
            </div>
        </li>
        <li>
            <img src="dist/img/rhythm_menu.png" style="width: 200px">
        </li>
    </ul>
</div>

<div>
    <ul class="nav" id="side-menu">
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=welcome"><i class="glyphicon "></i> Welcome</a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=get_started"><i class="fa fa-pencil-square fa-fw"></i> Getting Started <span class="fa arrow"></span></a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=components"><i class="fa fa-cogs fa-fw"></i> Components of Music Blocks <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo $PATH_PREFIX ?>page=main_tool">Main Toolbar<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="<?php echo $PATH_PREFIX ?>page=auxiliary_tool">Auxiliary Toolbar<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="<?php echo $PATH_PREFIX ?>page=palette_tool">Palette Toolbar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo $PATH_PREFIX ?>page=palette_music" style="margin-left: 1em;">Palettes for Music<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div><img src="./dist/img/rhythm.png" class="img_btn_icon" ><a href="#" style="margin-left: -1em;" onclick="showBlocks('Rhythm', './dist/img/rhythm.png' )">Rhythm</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/pitch.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=pitch" style="margin-left: -1em;" onclick="showBlocks('Pitch', 'pitch.png' )">Pitch</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/tone.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=tone" style="margin-left: -1em;" onclick="showBlocks('Tone', 'tone.png' )">Tone</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/intervals.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=interval" style="margin-left: -1em;" onclick="showBlocks('Intervals', 'intervals.png' )">Intervals</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/drums.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=drum" style="margin-left: -1em;" onclick="showBlocks('Drums', 'drums.png' )">Drums</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/widget.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=widget" style="margin-left: -1em;" onclick="showBlocks('Widgets', 'widgets.png' )">Widgets</a></div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo $PATH_PREFIX ?>page=palette_graphics" style="margin-left: 1em;">Palettes for Graphics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div><img src="./dist/img/mouse.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=mouse" style="margin-left: -1em;" onclick="showBlocks('Mouse', 'mouse.png' )">Mouse</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/pen.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=pen" style="margin-left: -1em;" onclick="showBlocks('Pen', 'pen.png' )">Pen</a></div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo $PATH_PREFIX ?>page=palette_program" style="margin-left: 1em;">Palettes for Programming<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div><img src="./dist/img/flow.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=flow" style="margin-left: -1em;" onclick="showBlocks('Flow', 'flow.png' )">Flow</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/action.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=action" style="margin-left: -1em;" onclick="showBlocks('Action', 'action.png' )">Action</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/boxes.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=box" style="margin-left: -1em;" onclick="showBlocks('Boxes', 'boxes.png' )">Boxes</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/number.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=number" style="margin-left: -1em;" onclick="showBlocks('Number', 'number.png' )">Number</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/boolean.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=boolean" style="margin-left: -1em;" onclick="showBlocks('Boolean', 'boolean.png' )">Boolean</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/sensor.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=sensor" style="margin-left: -1em;" onclick="showBlocks('Sensors', 'sensor.png' )">Sensors</a></div>
                                </li>
                                <li>
                                    <div><img src="./dist/img/heap.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=heap" style="margin-left: -1em;" onclick="showBlocks('Heap', 'heap.png' )">Heap</a></div>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="<?php echo $PATH_PREFIX ?>page=palette_extra" style="margin-left: 1em;">Extra Widgets<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                 <li>
                                     <div><img src="./dist/img/media.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=media" style="margin-left: -1em;" onclick="showBlocks('Rhythm', 'rhythm.png' )">Rhythm</a></div>
                                 </li>
                                 <li>
                                     <div><img src="./dist/img/extras.png" class="img_btn_icon" ><a href="<?php echo $PATH_PREFIX ?>page=extras" style="margin-left: -1em;" onclick="showBlocks('Mouse', 'mouse.png' )">Pitch</a></div>
                                 </li>
                             </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=tutorial"><i class="fa fa-wrench fa-fw"></i> Play with Music Blocks<span class="fa arrow"></span></a>

        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=example"><i class="fa fa-music fa-fw"></i> Examples with Music Blocks<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo $PATH_PREFIX ?>page=example_twinkle">Twinkle Twinkle Little Star</a>
                </li>
                <li>
                    <a href="#">Baa Baa Black Sheep</a>
                </li>
                <li>
                    <a href="#">Three Little Kittens Drums</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=documentation"><i class="fa fa-bars fa-fw"></i> Improve Documentation<span class="fa arrow"></span></a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=contribution"><i class="fa fa-wrench fa-fw"></i> Contributing to Music Blocks<span class="fa arrow"></span></a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=glossary"><i class="fa fa-folder fa-fw"></i> Glossary</a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=faq"><i class="fa fa-info-circle fa-fw"></i> FAQ</a>
        </li>
        <li>
            <a href="<?php echo $PATH_PREFIX ?>page=credits"><i class="fa fa-users fa-fw"></i> Credits</a>
        </li>
    </ul>
</div>