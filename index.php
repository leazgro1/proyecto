		
		<?php
      include("barra.php");
		?>
		
		<div class="contenido1">
			<!-- <div class="container"> -->
				<?php
      				include("sliderPortal.php");
				?>
			<!-- </div> -->
		</div>
		
		<div class="contenido2">
			<div class="container">
				<div class="tareas">
					<a href="#" style="text-decoration:none;" onclick="ga('send', 'event', 'suscripcion', 'clic', 'blog', 0);"><h2>Soluciones</h2></a>
				</div>
				<ul>
					<li>
						<a href="#Gestiona" id="gestiona" class="todos-iconos icon-gestion t-con" onclick="mostrar(1);"><!-- onclick="mostrar(1);" -->
						</a>
						<a href="#Gestiona" id="gestiona" class="texto t-con" onclick="mostrar(1);">Gestione</a><!-- onclick="mostrar(1);" -->
						<a href="#Gestiona" id="gestiona" class="todos-iconos icon-vermas" onclick="mostrar(1);"></a>
					</li>
					<li>
						<a href="#Informa" id="gestiona" class="todos-iconos icon-informacion t-con" onclick="mostrar(1);"><!-- onclick="mostrar(2);" -->
						</a>
						<a href="#Informa" id="gestiona" class="texto t-con" onclick="mostrar(1);">Monitorice</a><!-- onclick="mostrar(2);" -->
						<a href="#Gestiona" id="gestiona" class="todos-iconos t-con icon-vermas" onclick="mostrar(1);"></a>
					</li>
					<li>
						<a href="#Conecta" id="gestiona" class="todos-iconos icon-conecta t-con" onclick="mostrar(1);"><!-- onclick="mostrar(3);" -->
						</a>
						<a href="#Conecta" id="gestiona" class="texto t-con" onclick="mostrar(1);">Protege</a><!-- onclick="mostrar(3);" -->
						<a href="#Gestiona" id="gestiona" class="todos-iconos t-con icon-vermas" onclick="mostrar(1);"></a>
					</li>
					<!-- <li>
						<a href="#Asegura" id="gestiona" class="todos-iconos icon-asegura t-con" onclick="mostrar(4);"> onclick="mostrar(4);" 
						</a>
						<a href="#Asegura" id="gestiona" class="texto t-con" onclick="mostrar(4);">Asegura</a> onclick="mostrar(4);" 
						<a href="#Gestiona" id="gestiona" class="todos-iconos t-con icon-vermas" onclick="mostrar(4);"></a>
					</li>
					<li>
						<a href="#Protege" id="gestiona" class="todos-iconos icon-protege t-con" onclick="mostrar(5);"> onclick="mostrar(5);" 
						</a>
						<a href="#Protege" id="gestiona" class="texto t-con" onclick="mostrar(5);">Protege</a> onclick="mostrar(5);" 
						<a href="#Gestiona" id="gestiona" class="todos-iconos t-con icon-vermas" onclick="mostrar(5);"></a>
					</li> -->
				</ul>
			</div>
		</div>
		<div class="contenido3">
			<div class="container gestiona-1">
				<?php
      				include("slider.php");
				?>
			</div>
			<div class="container informa-1" id="mostraraqui">
				<?php
					include("slider-info.php");
				?>
			</div>
			<div class="container conecta-1" id="mostraraqui">
				<?php
					include("slider-conecta.php");
				?>
			</div>
			<div class="container asegura-1" id="mostraraqui">
				<?php
					include("slider-asegura.php");
				?>
			</div>
			<div class="container protege-1" id="mostraraqui">
				<?php
					include("slider-protege.php");
				?>
			</div>
		</div>
		<!-- <div class="contenido4">
			<div class="container">
				<div class="container2">
					<div class="ventana">
						<div class="img-msn">
							<a href="dato_tab_1.php"><img src="imagen/dos.jpg" width="100%" height="190px;"></a>
						</div>
						<div class="texto-msn">
							<div class="spacio">
								<div class="titu">
									<p>Reunion de personal</p>
								</div>
								<div class="texto">
									<p>Implementacion con Personal Capacitado</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ventana">
						<div class="img-msn">
							<a href="dato_tab_2.php"><img src="imagen/uno.jpg" width="100%" height="190px;"></a>
						</div>
						<div class="texto-msn">
							<div class="spacio">
								<div class="titu">
									<p>Capacitación de las Herramientas</p>
								</div>
								<div class="texto">
									<p>Personal capacitado sobre los cursos de Foglight de Dell</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ventana">
						<div class="img-msn">
							<a href="dato_tab_3.php"><img src="imagen/tres.jpg" width="100%" height="190px;"></a>
						</div>
						<div class="texto-msn">
							<div class="spacio">
								<div class="titu">
									<p>Implementaci&oacute;n de la herramienta</p>
								</div>
								<div class="texto">
									<p>Se llevo acabo la implementaci&oacute;n de la herramienta</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

    <!-- code -->
		<div class="contenido6">
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="left">
						<?php
							//include("slider2.php");
						?>						
					</div>
					<div class="der">
						<?php
							//include("slider3.php");
						?>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>		
		<?php
        include("footer.php");
		?>
