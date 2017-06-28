<?php
    $PATH_PREFIX = "?";
?>

<ul class="nav" id="side-menu">
    <li>
        <a href="<?php echo $PATH_PREFIX ?>page=welcome"><i class="glyphicon "></i> Welcome</a>
    </li>
    <li>
        <a href="<?php echo $PATH_PREFIX ?>page=get_started"><i class="fa fa-pencil-square fa-fw"></i> Getting Started<span class="fa arrow"></span></a>
		<ul class="nav nav-second-level collapse" id="mb-components-ul">
            <li>
                <a href="<?php echo $PATH_PREFIX ?>page=quick_start">Quick Start</span></a>
            </li>
            <li>
                <a href="<?php echo $PATH_PREFIX ?>page=introduction">Introduction to Music Blocks</span></a>
            </li>
		</ul>
    </li>
    <li>
        <a href="<?php echo $PATH_PREFIX ?>page=components"><i class="fa fa-cogs fa-fw"></i> Components of Music Blocks <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse" id="mb-components-ul">
            <li>
                <a href="<?php echo $PATH_PREFIX ?>page=main_tool">Main Toolbar</span></a>
            </li>
            <li>
                <a href="<?php echo $PATH_PREFIX ?>page=auxiliary_tool">Auxiliary Toolbar</span></a>
            </li>
            <li>
                <a href="<?php echo $PATH_PREFIX ?>page=palette_tool">Palette Toolbar<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level" id="mb-palette-toolbar-ul">
                    <li>
                        <a href="<?php echo $PATH_PREFIX ?>page=palette_music">Palettes for Music<span class="fa arrow"></span></a>
                        <ul class="nav nav-fourth-level collapse" id="mb-palette-music-ul">
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=rhythm" onclick="showBlocks('Rhythm', './dist/img/rhythm.png' )"><img src="./dist/img/rhythm.png" class="img_btn_icon" ><span>Rhythm</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=pitch" onclick="showBlocks('Pitch', './dist/img/pitch.png' )"><img src="./dist/img/pitch.png" class="img_btn_icon" ><span>Pitch</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=tone" onclick="showBlocks('Tone', './dist/img/tone.png' )"><img src="./dist/img/tone.png" class="img_btn_icon" ><span>Tone</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=interval" onclick="showBlocks('Intervals', './dist/img/intervals.png' )"><img src="./dist/img/intervals.png" class="img_btn_icon" ><span>Intervals</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=drum" onclick="showBlocks('Drums', './dist/img/drums.png' )"><img src="./dist/img/drums.png" class="img_btn_icon" ><span>Drums</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=widget" onclick="showBlocks('Widgets', './dist/img/widgets.png' )"><img src="./dist/img/widget.png" class="img_btn_icon" ><span>Widgets</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $PATH_PREFIX ?>page=palette_graphics">Palettes for Graphics<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="mb-palette-graph-ul">
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=mouse" onclick="showBlocks('Mouse', './dist/img/mouse.png' )"><img src="./dist/img/mouse.png" class="img_btn_icon" ><span>Mouse</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=pen" onclick="showBlocks('Pen', './dist/img/pen.png' )"><img src="./dist/img/pen.png" class="img_btn_icon" ><span>Pen</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $PATH_PREFIX ?>page=palette_program">Palettes for Programming<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="mb-palette-program-ul">
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=flow" onclick="showBlocks('Flow', './dist/img/flow.png' )"><img src="./dist/img/flow.png" class="img_btn_icon" ><span>Flow</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=action" onclick="showBlocks('Action', './dist/img/action.png' )"><img src="./dist/img/action.png" class="img_btn_icon" ><span>Action</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=box" onclick="showBlocks('Boxes', './dist/img/boxes.png' )"><span><img src="./dist/img/boxes.png" class="img_btn_icon" >Boxes</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=number" onclick="showBlocks('Number', './dist/img/number.png' )"><img src="./dist/img/number.png" class="img_btn_icon" ><span>Number</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=boolean" onclick="showBlocks('Boolean', './dist/img/boolean.png' )"><img src="./dist/img/boolean.png" class="img_btn_icon" ><span>Boolean</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=sensor" onclick="showBlocks('Sensors', './dist/img/sensor.png' )"><img src="./dist/img/sensor.png" class="img_btn_icon" ><span>Sensors</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=heap" onclick="showBlocks('Heap', './dist/img/heap.png' )"><img src="./dist/img/heap.png" class="img_btn_icon" ><span>Heap</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $PATH_PREFIX ?>page=palette_extra">Extra Widgets<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="mb-palette-extra-ul">
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=media" onclick="showBlocks('Media', './dist/img/media.png' )"><img src="./dist/img/media.png" class="img_btn_icon" ><span>Media</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $PATH_PREFIX ?>page=extras" onclick="showBlocks('Extras', './dist/img/extras.png' )"><img src="./dist/img/extras.png" class="img_btn_icon" ><span>Extras</span></a>
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
        <a href="<?php echo $PATH_PREFIX ?>page=documentation"><i class="fa fa-bars fa-fw"></i> Improve Documentation</span></a>
    </li>
    <li>
        <a href="<?php echo $PATH_PREFIX ?>page=contribution"><i class="fa fa-wrench fa-fw"></i> Contributing to Music Blocks</span></a>
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

<div id="blocks_menu" style="<?php if($showMenu){echo 'visibility: visible';} else{ echo 'visibility: hidden';}  ?>">
    <ul class="nav">
        <li class="manage_heights">
            <div>
                <img id="menu_header_img" class="images"/><span id="menu_header_title"></span>
                <i class="fa fa-times" onclick="hideBlocks()"></i>
            </div>
        </li>
        <li>
            <div id="menu_content">
                <?php
                    if($showMenu)
                    {
                        include $menu_html;
                    }

                ?>
            </div>
        </li>
    </ul>
</div>