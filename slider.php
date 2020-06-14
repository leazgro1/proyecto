<script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: false,                                   
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
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1000));
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
    
    <div id="slider1_container" style="position: relative; top: 0px; left: -14px; width: 1000px; height: 400px; overflow: hidden; ">
 
        <!-- Slides Container --> 
        <div class="slider1" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px; height: 400px; overflow: hidden;">
            <div>
                <div class="izq">
                    <img u="image" src="imagen/IMG-GESTIONA.jpg" />
                </div>
                <div class="der">
                    <div class="texto">
                        <p>
                            <h3>Simplifique la gestión de...</h3>
                        </p>
                    </div>
                    <div class="coment">
                        <p>
                            <UL>
                                <LI>La Nube
                                <LI>Los dispositivos de usuario final
                                <LI>El Desempeño de Aplicaciónes
                                <LI>El Ambiente Virtualizado
                                <LI>El Ambiente Windows
                            </UL>
                        </p>
                    </div>
                    <div class="ir">
                        <a href="https://www.quest.com/mx-es/solutions/cloud-management/" target="_blank">Leer mas..</a>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="izq">
                    <img u="image" src="imagen/IMG-INFORMA.jpg" />
                </div>
                <div class="der">
                    <div class="texto">
                        <p>
                            <h3>Maximize el valor de su Negocio...</h3>
                        </p>
                    </div>
                    <div class="coment">
                        <p>
                            <UL>
                                <LI>Integración de Aplicaciones y Datos
                                <LI>Big Data Analytics
                                <LI>Inteligencia de Negocio BI
                                <LI>Gestión y Desarrolo de Base de Datos
                                <LI>Replicación y Respaldos de Base de Datos
                            </UL>
                        </p>
                    </div>
                    <div class="ir">
                        <a href="https://www.quest.com/mx-es/solutions/database-management/" target="_blank">Leer mas..</a>
                    </div>
                </div>
            </div>
            <div><!--
                <div class="izq">
                    <img u="image" src="imagen/IMG-CONECTA.jpg" />
                </div>
                <div class="der">
                    <div class="texto">
                        <p>
                            <h3>Habilite la movilidad sin sacrificar el control...</h3>
                        </p>
                    </div>
                    <div class="coment">
                        <p>
                            <UL>
                                <LI>Gestión de Movilidad Empresarial
                                <LI>Virtualización de Escritorios
                                <LI>Seguridad de la ultima brecha
                                <LI>Seguridad en la red
                                <LI>Seguridad en los Accesos Remotos
                            </UL>
                        </p>
                    </div>
                    <div class="ir">
                        <a href="http://software.dell.com/solutions/mobile-workforce-management/" target="_blank">Leer mas..</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="izq">
                    <img u="image" src="imagen/IMG-PROTEGE.jpg" />
                </div>
                <div class="der">
                    <div class="texto">
                        <p>
                            <h3>Mejor Seguridad, mejor Empresa...</h3>
                        </p>
                    </div>
                    <div class="coment">
                        <p>
                            <UL>
                                <LI>Seguridad en el correo
                                <LI>Seguridad en los dispositivos finales
                                <LI>Gestión de accesos y de identidad
                                <LI>Seguridad de red
                                <LI>Acceso movil seguro
                            </UL>
                        </p>
                    </div>
                    <div class="ir">
                        <a href="http://software.dell.com/solutions/security/" target="_blank">Leer mas..</a>
                    </div>
                </div>
            </div>-->
            <div>
                <div class="izq">
                    <img u="image" src="imagen/IMG-ASEGURA.jpg" />
                </div>
                <div class="der">
                    <div class="texto">
                        <p>
                            <h3>Soluciones de respaldo y recuperación para...</h3>
                        </p>
                    </div>
                    <div class="coment">
                        <p>
                            <UL>
                                <LI>Aplicaciónes específicas
                                <LI>Equipos Físicos
                                <LI>Equipos Virtuales
                                <LI>Appliances para Deduplicación y Respaldos
                            </UL>
                        </p>
                    </div>
                    <div class="ir">
                        <a href="https://www.quest.com/mx-es/solutions/data-protection/" target="_blank">Leer mas..</a>
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
        <span u="arrowleft" class="jssora12l" style="top: 170px; left: 0px;opacity:0.30;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 170px; right: 0px;opacity:0.30;">
        </span>
        </div>