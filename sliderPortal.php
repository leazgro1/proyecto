<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>  
    <style>
        .single-image img{
            width:256px;
            height:auto;
        }
        .fancyOther2{
            cursor:pointer;
        }       
    </style>
    
    <script>
    
        $(function(){               
            $(".fancyMedia").fancybox({ 
                helpers : {
                    media : {}
                }
            });
        });
        
    </script>
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 1000,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            

            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1100);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);

        };
    </script>

    <style>

        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }

    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 500px; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 500px; overflow: hidden;">
            
            <div data-p="225.00" style="display: none;">
                <!-- <img data-u="image" src="imagen/slider11.jpg"  /> -->
                <div class="imagenx">
                    <div class="enmedio">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                    Mida, Diagnostique y Controle
                                </p>
                                <p class="two">
                                    Conozca <b style="
        font-family: arial;
        color: #3F51B5;
    ">Foglight</b> y lo que puede hacer para optimizar la gestión del desempeño de sus aplicaciones   
                                </p>
                            </div>
                            <div class="accion">
                                <a class="fancyMedia bot" data-fancybox-type="iframe" href="https://www.youtube.com/embed/VKZPKCxGaxo?list=TLvlzIx7MNqG4">Ver Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
        

            </div>

            <div data-p="225.00" style="display: none;">
                <!-- <img data-u="image" src="imagen/PC_Foglight.png" /> -->
                
				<div class="imagenx1">
                    <div class="enmedio1">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                    Descubra las mejores soluciones del mercado para la gestión.
                                </p>
                                <p class="two">

                                </p>
                            </div>
                            <div class="accion">
                                <a href="https://www.quest.com/mx-es/solutions/database-management/" target="_blank" class="bot">ver mas..</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
				
            </div>  

            <div data-p="225.00" style="display: none;">
                <div class="imagenx2">
                    <div class="enmedio3">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                    ¿Migracion replicación o Integración de Datos?
                                </p>
                                <p class="two">
                                    Conozca <b style="
                                    font-family: arial;
                                    color: #3F51B5;
                                    ">Foglight</b> y lo que puede hacer para optimizar la gestión del desempeño de sus aplicaciones   
                                </p>
                            </div>
                            <div class="accion">
                                <a class="fancyMedia bot" data-fancybox-type="iframe" href="https://www.youtube.com/embed/ygS_ouUaNus">Ver Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
            </div>
        
            <div data-p="225.00" style="display: none;">
				<div class="imagenx3">
                    <div class="enmedio1">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                Mida y mejore la experiencia del usuario
                                </p>
                                <p class="two">

                                </p>
                            </div>
                            <div class="accion">
                                <a href="https://www.linkedin.com/company/arcturus-technologies-inc-/" target="_blank" class="bot">Ver mas..</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
            </div>

            <div data-p="225.00" style="display: none;">
				<div class="imagenx4">
                    <div class="enmedio1">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                Potenciar la transformación digital.
                                </p>
                                <p class="two">

                                </p>
                            </div>
                            <div class="accion">
                                <a href="https://www.microfocus.com/en-us/home" target="_blank" class="bot">Ver mas..</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
            </div>

            <div data-p="225.00" style="display: none;">
				<div class="imagenx5">
                    <div class="enmedio1">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                Impulsando el progreso tecnológico. 
                                </p>
                                <p class="two">

                                </p>
                            </div>
                            <div class="accion">
                                <a href="https://www.progress.com" target="_blank" class="bot">Ver mas..</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
            </div>

            <div data-p="225.00" style="display: none;">
				<div class="imagenx6">
                    <div class="enmedio1">
                        <div class="centro">
                            <div class="titulo">
                                <p class="one">
                                Quest lo ayuda a resolver problemas complejos con soluciones simples.
                                </p>
                                <p class="two">

                                </p>
                            </div>
                            <div class="accion">
                                <a href="https://www.quest.com/mx-es/" target="_blank" class="bot">Ver mas..</a>
                            </div>
                        </div>
                    </div>
                    <div class="degradado">
                    </div>
                </div>
            </div>
            

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>