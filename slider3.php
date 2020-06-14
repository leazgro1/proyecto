    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                   
                $AutoPlaySteps: 1,                                  
                $AutoPlayInterval: 3000,                            
                $PauseOnHover: 1,                               

                $ArrowKeyNavigation: true,   			            
                $SlideDuration: 500,                                
                $MinDragOffsetToSlide: 20,                                                        
                $SlideSpacing: 0, 					                
                $DisplayPieces: 1,                                  
                $ParkingPosition: 0,                                
                $UISearchMode: 1,                                  
                $PlayOrientation: 1,                                
                $DragOrientation: 3,                                

                $SlideshowOptions: {                               
                    $Class: $JssorSlideshowRunner$,                 
                    $Transitions: _SlideshowTransitions,            
                    $TransitionsOrder: 1,                           
                    $ShowLink: true                                    
                },

                $BulletNavigatorOptions: {                                
                    $Class: $JssorBulletNavigator$,                       
                    $ChanceToShow: 2,                               
                    $AutoCenter: 1,                                 
                    $Steps: 1,                                     
                    $Lanes: 1,                                    
                    $SpacingX: 10,                        
                    $SpacingY: 10,                                   
                    $Orientation: 1                               
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              
                    $ChanceToShow: 2,                            
                    $Steps: 1                                   
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container2", options);

            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <div id="slider1_container2" style="position: relative; top: 0px; left: 0px; width: 500px; height: 225px; overflow: hidden; ">
        <!-- Slides Container -->
        <div class="slider7" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 500px; height: 225px; overflow: hidden;">
            <div>
                <div class="izq">
                    <div class="arriva">
                        <p>Evento de Dell software en el hotel..</p>
                    </div>
                    <div class="abajo">
                        <p>Gran evento del Dell Software para mostrar sus productos, avances y actualizaciones</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="izq">
                    <div class="arriva">
                        <p>Foglight SNMP Cartridge</p>
                    </div>
                    <div class="abajo">
                        <p>Conferencia para dar a conocer el nuevo cartucho SNMP para Foglight </p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url(imagen/b21.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb05" style="bottom: -1px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

        <style>
            .jssora12l, .jssora12r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 30px;
                height: 46px;
                cursor: pointer;
                background: url(imagen/a15.png) no-repeat;
                overflow: hidden;
            }
            .jssora12l { background-position: -16px -37px; }
            .jssora12r { background-position: -75px -37px; }
            .jssora12l:hover { background-position: -136px -37px; }
            .jssora12r:hover { background-position: -195px -37px; }
            .jssora12l.jssora12ldn { background-position: -256px -37px; }
            .jssora12r.jssora12rdn { background-position: -315px -37px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="top: 74px; left: 0px;opacity:0.30;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 74px; right: 0px;opacity:0.30;">
        </span>
        </div>
        </div>