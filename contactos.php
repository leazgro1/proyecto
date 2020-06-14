	<?php
		include("barra.php");

    if(!empty($_POST)){
    
    $name = $_POST['nombre'];
    $compania = $_POST['compania'];
    $telefono = $_POST['tel'];
    $email = $_POST['correo'];
    $descripcion = $_POST['descripcion'];
    $captcha = $_POST['g-recaptcha-response'];
    
    $secret = '6LesaPYUAAAAAIwco-ot3ttO2uxEt63xMz_N_MZD';
    
    if(!$captcha){

      //echo "Por favor verifica el captcha";
      
      } else {
      
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
      
      $arr = json_decode($response, TRUE);
      
      if($arr['success'])
      {
        /*echo '<h2>Enviado</h2>';*/
        } else {
        /*echo '<h3>Error al comprobar Captcha </h3>';*/
      }
    }
  }
?>
	<div class="structure1">
		<div class="container">
			<div class="formulariocontacto">
				<div class="bloque1">
					<div class="encabezado">
						<p>Contacto</p>
					</div>
					<form name="formu" class="forms" method="POST" action="">
						<p><input class="textos" type="text" name="nombre" placeholder="Nombre completo" required></p>
						<p><input class="textos" type="text" name="compania" placeholder="Empresa" required></p>
						<p><input class="textos" type="tel" name="tel" placeholder="Teléfono" required></p>
						<p><input class="textos" type="email" name="correo" placeholder="Correo Electrónico" required></p>
						<p><textarea class="texarea" type="text" name="descripcion" placeholder="Descripción" required></textarea></p>
          

            <div class="g-recaptcha" data-sitekey="6LesaPYUAAAAAOU62bIR5KB5cGk5tX5L2JJUYQvP"></div>
            <br>
            


						<p><input type="submit" id="botoncontacto" name="enviar" value="Enviar" class="boton"></p>
					</form>
          <div class="other">
            <p>O enviar correo a <a href="mailto:contacto@ixpia.com.mx" target="_blank"><b>contacto@ixpia.com.mx</b></a></p>
          </div>
					<div class="respuesta">
            <?php
              if(isset($_POST['enviar'])){  
                  if(empty($_POST['nombre']) || empty($_POST['compania']) || empty($_POST['tel']) || empty($_POST['correo']) || empty($_POST['descripcion']) || empty($_POST['g-recaptcha-response'])) {//si estan vacios
                      echo "Por favor, Valida el Captcha";
                  }else{
                      //validamos
                      function valida_email($a){
                                if (!preg_match("/^[a-z ]+$/i", stripslashes(trim($acc_type)))) return true;
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
                          
                              $nombre = $_POST['nombre']; //mysql_real_escape_string($_POST['nombre']); 
                              $compania = $_POST['compania']; //mysql_real_escape_string($_POST['compania']);
                              $tel = $_POST['tel']; //mysql_real_escape_string($_POST['tel']); 
                              $correo= $_POST['correo'];
                              $desc = $_POST['descripcion']; //mysql_real_escape_string($_POST['descripcion']); 
                              $cuerpo="";
                              $cuerpo=$cuerpo."Nombre: ".$nombre."\n";
                              $cuerpo=$cuerpo."\n";
                              $cuerpo=$cuerpo."Empresa: ".$compania."\n";
                              $cuerpo=$cuerpo."\n";
                              $cuerpo=$cuerpo."Telefono: ".$tel."\n";
                              $cuerpo=$cuerpo."\n";
                              $cuerpo=$cuerpo."email: ".$correo."\n";
                              $cuerpo=$cuerpo."\n";
                              $cuerpo=$cuerpo."Descripci�n:\n ".$desc."\n";
                              if(mail("contacto@ixpia.com.mx","SOLICITUD DE INFORMACION",$cuerpo)){
                                  echo "Correo enviado correctamente";
                              }else{
                                  echo "No se pudo mandar el correo porfavor intentelo de nuevo Gracias";
                              }
                          
                          }else{
                            echo "email no valido";
                          }
                       /*}else{
                          echo "El campo telefono solo debe de contener valores numericos";
                       }*/
                  }
              }
            ?>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
	</div>
<?php
	
	include("footer.php");

?>