<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blocks User Manual</title>

    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Music Blocks User Manual</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse" id="sidebar_menu_div">
                    <?php include "./pages/menu.php" ?>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid" id="content_div" >
				<?php

					if(isset($_GET["page"] )){

                        $page = strval($_GET["page"]);
                        //welcome
                        if( $page == "welcome" )
                            $path = "./pages/welcome.html";
                        //getting started
                        else if( $page == "get_started")
                            $path = "./pages/get_started.html";
                        //components of the MB
                        else if( $page == "components")
                            $path = "./pages/components.html";
                        //main tool
                        else if( $page == "main_tool")
                            $path = "./pages/main_tool.html";
                        //auxiliary tool
                        else if( $page == "auxiliary_tool")
                            $path = "./pages/auxiliary_tool.html";
                        //palette
                        else if( $page == "palette_tool")
                            $path = "./pages/palette/palette_tool.html";
                        //music
                        else if( $page == "palette_music")
                            $path = "./pages/palette/palette_music.html";
                        else if( $page == "rhythm")
                            $path = "./pages/palette/rhythm.php";
                        else if( $page == "pitch")
                            $path = "./pages/palette/pitch.html";
                        else if( $page == "tone")
                            $path = "./pages/palette/tone.html";
                        else if( $page == "interval")
                            $path = "./pages/palette/interval.html";
                        else if( $page == "drum")
                            $path = "./pages/palette/drum.html";
                        else if( $page == "widget")
                            $path = "./pages/palette/widget.html";
                        //graphic
                        else if( $page == "palette_graphics")
                            $path = "./pages/graphics/palette_graphics.html";
                        else if( $page == "mouse")
                            $path = "./pages/graphics/mouse.html";
                        else if( $page == "pen")
                            $path = "./pages/graphics/pen.html";
                        //programming
                        else if( $page == "palette_program")
                            $path = "./pages/program/palette_program.html";
                        else if( $page == "flow")
                            $path = "./pages/program/flow.html";
                        else if( $page == "action")
                            $path = "./pages/program/action.html";
                        else if( $page == "box")
                            $path = "./pages/program/box.html";
                        else if( $page == "number")
                            $path = "./pages/program/number.html";
                        else if( $page == "boolean")
                            $path = "./pages/program/boolean.html";
                        else if( $page == "sensor")
                            $path = "./pages/program/sensor.html";
                        else if( $page == "heap")
                            $path = "./pages/program/heap.html";
                        //extra
                        else if( $page == "palette_extra")
                            $path = "./pages/extra/palette_extra.html";
                        else if( $page == "media")
                            $path = "./pages/extra/media.html";
                        else if( $page == "extras")
                            $path = "./pages/extra/extras.html";
                        //tutorials
                        else if( $page == "tutorial")
                            $path = "./pages/tutorial/tutorial_main.html";
                        //examples
                        else if( $page == "example")
                            $path = "./pages/example/example_main.html";
                        else if( $page == "example_twinkle")
                            $path = "./pages/example/example_twinkle.html";
                        //documentation
                        else if( $page == "documentation")
                            $path = "./pages/documentation.html";
                        //contribution
                        else if( $page == "contribution")
                            $path = "./pages/contribution.html";
                        //glossary
                        else if( $page == "glossary")
                            $path = "./pages/glossary.html";
                        //FAQ
                        else if( $page == "faq")
                            $path = "./pages/faq.html";
                        //credits
                        else if( $page == "credits")
                            $path = "./pages/credits.html";


                        include $path;
					}
					else{
						include "./pages/welcome.html";
					}
				?>
            </div>
        </div>

    </div>
	<br/>

	<footer class="footer">
      <div class="container">
        <p align="center">© Music Blocks 2017. All rights reserved.</p>
      </div>
    </footer>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>
    <script src="./dist/js/sb-admin-2.js"></script>
    <script src="./dist/js/menu_actions.js"></script>
</body>
</html>
