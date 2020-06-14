<?php
		include("barra.php");
  ?>
  <!---------------------- html------------------------------------------>

  <script>
function enviar(){
  alert("enviar");
}

</script>

 <!---------------------- Proximos Webinar ----------------------------->
 <div class="proximos-webinar">
    <div class="container">
    <div class="left-side">
    <img src="imagen/webinar/webinar1.png" class="img-fluid" alt="imagen webinar" width="100%">  
    </div>
<!---------------- contacto ----------------------------------------->
  
<div class="right-side">
					<div class="contacto-webinar">
				<div class="bloque1">
					<div class="registrate">
						<p>Registrate para obtener el link</p>
					</div>
					<form name="formu" class="forms" >
						<p><input class="input-webinar" type="text" name="nombre" placeholder="Nombre completo" required></p>
						<p><input class="input-webinar" type="text" name="compania" placeholder="Empresa" required></p>
						<p><input class="input-webinar" type="tel" name="tel" placeholder="Teléfono" required></p>
						<p><input class="input-webinar" type="email" name="correo" placeholder="Correo Electrónico" required></p>
						<p><textarea class="text-webinar" type="text" name="descripcion" placeholder="Cuéntanos como te podría ayudar esta herramienta" required></textarea></p>
            <div class="g-recaptcha" data-sitekey="6LesaPYUAAAAAOU62bIR5KB5cGk5tX5L2JJUYQvP"></div>
            <br>
        	<p><input type="button" onclick="enviar()" id="botoncontacto" name="enviar" value="Enviar" class="btn-webinar"></p>
            <!--<button type="submit" id="botoncontacto" name="enviar" value="Enviar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mimodalejemplo"> Enviar</button> -->
            </form>
                  
					<div class="respuesta">


<!-- Modal -->
<div class="modal fade" id="mimodalejemplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gracias por registrarte</h4>
      </div>
      <div class="modal-body">
        	https://www.google.com.mx
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
            <!-- -->
            <?php
              if(isset($_POST['enviar'])){  
                  if(empty($_POST['nombre']) || empty($_POST['compania']) || empty($_POST['tel']) || empty($_POST['correo']) || empty($_POST['descripcion']) || empty($_POST['g-recaptcha-response'])) {//si estan vacios
                      echo "Por favor, Valida el Captcha";
                  }else{
                      //validamos
                      
                      function valida_email($a){
                                if (!preg_match("/^[a-z ]+$/i", stripslashes(trim($a)))) return true;
                                else return false;                
                      }
                      function val_numero($x){
                         $x=strip_tags($x);
                         $resultado=0;
                         if(is_numeric($x)){
                         $resultado=$x;
                         return $resultado;
                         }
                      }
                      //if(val_numero($_POST['tel'])){
                          if(valida_email($_POST['correo'])){
                          
                              $nombre = $_POST['nombre']; 
                              $compania = $_POST['compania']; 
                              $tel = $_POST['tel']; 
                              $correo= $_POST['correo'];
                              $desc = $_POST['descripcion']; 
                            //creacion de txt
                              $contenido=" Nombre: $nombre Empresa: $compania Telefono $tel Correo: $correo Descripcion: $desc
                             ";
                              // abrimos el archivo
                              $archivo = "";
                              $archivo=fopen("txt-webinar/clientes.txt","a");
                              // escribimos la informacion 
                              fwrite ($archivo,$contenido);
                              // ventana emergente popup

                                                        
                              
                              /* if(mail($correo,"SOLICITUD DE webinar",$cuerpo)){
                                  echo "Correo enviado correctamente";
                              }else{
                                  echo "No se pudo mandar el correo porfavor intentelo de nuevo Gracias";
                              }
                         
                          }else{
                            echo "email no valido";
                          }*/
                       /*}else{
                          echo "El campo telefono solo debe de contener valores numericos";
                       }*/
                      }
                  }
              }
            ?>
					</div>
				</div>
		</div>
		<br>
		<br>
	</div>

<!------------------  aqui termina el formulario ---------------------->
  </section>
  

<?php
        include("footer.php");
    ?>