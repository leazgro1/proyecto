<?php
		include("barra.php");
  ?>

<script type="text/javascript">
function enviar(){

  var response = grecaptcha.getResponse();
  /*if(response.length == 0){
      console.log("captcha no");
  }else{
    console.log("captcha");
  }*/
  var nombre = document.getElementById("nombre").value;
  var compania = document.getElementById("compania").value;
  var tel = document.getElementById("tel").value;
  var email = document.getElementById("email").value;
  var descripcion = document.getElementById("descripcion").value;
  if(nombre.length > 0 && compania.length > 0 && tel.length > 0 && email.length > 0 && descripcion.length && !(response.length == 0)){
    if(!validaTelefono(tel)){
      alert("Ingrese un telefono valido");
    }else if(!validarEmail(email)){
      alert("Ingrese un correo valido");
    }else{
      var parametros = {
        "nombre":nombre,
        "compania":compania,
        "tel":tel,
        "correo":email,
        "descripcion":descripcion
      };
      $.ajax({
        data: parametros,
        url:"validaWebinar.php",
        type:"POST",
        beforeSend: function(){
          console.log("Procesando");
        },
        success: function(data){
          if(!(data == "false")){
            console.log("url:"+data); 
            limpiar();
            document.getElementById("idPop").innerHTML;
            openModal();
          }
        }
      });
    }
  }else{
    alert("Favor de llenar todos los campos");
  }
}
function limpiar(){
  var nombre = document.getElementById("nombre").value ="";
  var compania = document.getElementById("compania").value="";
  var tel = document.getElementById("tel").value="";
  var email = document.getElementById("email").value="";
  var descripcion = document.getElementById("descripcion").value="";
  grecaptcha.reset();
}
function openModal(){
  $("#pop-webinar").addClass("pop-visible");
}
function closeModal(){
  $("#pop-webinar").removeClass("pop-visible");
}
function validarEmail(valor) {
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(valor)){
   return true;
  } else {
   return false;
  }
}
function validaTelefono(valor) {
  if (/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(valor)){
   return true;
  } else {
   return false;
  }
}
</script>

<!-- contacto -->
<div class="proximos-webinar">
  <div class="container">
  <div class="left-side">
      <img src="imagen/webinar/meeting.jpg" class="img-fluid" alt="imagen webinar" width="100%">  
    </div>
    <div class="right-side">
	    <div class="contacto-webinar">
		    <div class="registrate">
			    <p>Registrate para ver los videos</p>
		    </div>
	  	  <form name="formu" class="forms" >
			  <p><input class="input-webinar" type="text" id="nombre" name="nombre" placeholder="Nombre completo" required /></p>
			  <p><input class="input-webinar" type="text" id="compania" name="compania" placeholder="Empresa" required /></p>
			  <p><input class="input-webinar" type="tel" id="tel" name="tel" placeholder="Teléfono" required /></p>
			  <p><input class="input-webinar" type="email" id="email" name="correo" placeholder="Correo Electrónico" required /></p>
			  <p><textarea class="text-webinar" type="text" id="descripcion" name="descripcion" placeholder="Cuéntanos como te podría ayudar esta herramienta" required></textarea></p>
        <div class="g-recaptcha" data-sitekey="6LesaPYUAAAAAOU62bIR5KB5cGk5tX5L2JJUYQvP"></div>
        <br>
        <a href="#procesar" onclick="enviar()" id="botoncontacto" name="enviar" class="btn-webinar">Enviar</a>
        </form> 
	    </div>
		</div>
	</div>
</div>

<!-- aqui termina el formulario -->
<div class="pop-webinar pop-close" id="pop-webinar" style="width: 100%; height: 100%; overflow-y: auto;">
  <div class="container">
    <div class="pop-space">
      <div class="pop-title">
        <span class="close_pop" onclick="closeModal()">x</span>
      </div>
      <div class="pop-body">
        <div class="pop-text" id="idPop">
        <div class="row">
           <div class="column">
               <div class="content-web">
               <video width="320" height="240" controls>
                <source src="videos-webinar/JS.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>    
                <div class="letter-web">Webinar Applicare</div>
               </div>
           </div>

           <div class="column">
               <div class="content-web">
               <video width="320" height="240" controls>
                <source src="videos-webinar/jquery.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>   
                <div class="letter-web">Webinar Foglight</div>
               </div>
           </div>

           <div class="column">
               <div class="content-web">
               <video width="320" height="240" controls>
                <source src="videos-webinar/bootstrap.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>    
                <div class="letter-web">Webinar Toad</div>
               </div>
           </div>
        </div>
        </div>
        <!--<div class="pop-control">
          <a href="#close" onclick="closeModal()">Cerrar</a>
        </div>-->
      </div>
    </div>
  </div>
</div>

<?php
        include("footer.php");
?>