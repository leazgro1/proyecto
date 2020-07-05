<?php
		include("barra.php");
  ?>

<script type="text/javascript">
function opcionCheck(){
  var ap = document.getElementById('applicare');
  var fo = document.getElementById('foglight');
  var sql = document.getElementById('sql');
  var opcion = 0;
  if(ap.checked){
    opcion = 1
  }else if(fo.checked){
    opcion = 2;
  }else if(sql.checked){
    opcion = 3;
  }
  return opcion;
}
function enviar(){
  if(opcionCheck() != 0){
    var response = grecaptcha.getResponse();
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
            if(opcionCheck() == 1){
              document.getElementById("idPop").innerHTML ='<a href="'+data+'" target="_blank">Click url webinar</a><p>Url webinar: '+data+'</p>';
            }else if(opcionCheck() == 2){
              document.getElementById("idPop").innerHTML ='<a href="'+data+'" target="_blank">Click url webinar</a><p>Url webinar: '+data+'</p>';
            }else if(opcionCheck() == 3){
              document.getElementById("idPop").innerHTML ='<a href="'+data+'" target="_blank">Click url webinar</a><p>Url webinar: '+data+'</p>';
            }
            openModal();
          }
        }
      });
    }
  }else{
    alert("Favor de llenar todos los campos");
  }
  }else{
    alert("Selecciona una opcion");
  }
}
function limpiar(){
  var nombre = document.getElementById("nombre").value ="";
  var compania = document.getElementById("compania").value="";
  var tel = document.getElementById("tel").value="";
  var email = document.getElementById("email").value="";
  var descripcion = document.getElementById("descripcion").value="";
  limpiarCheck()
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
function checkbox(id){
  var ap = document.getElementById('applicare');
  var fo = document.getElementById('foglight');
  var sql = document.getElementById('sql');
  ap.checked = false; 
  fo.checked = false; 
  sql.checked = false;  
  document.getElementById(id).checked = true;
}
function limpiarCheck(){
  var ap = document.getElementById('applicare');
  var fo = document.getElementById('foglight');
  var sql = document.getElementById('sql');
  ap.checked = false; 
  fo.checked = false; 
  sql.checked = false; 
}
</script>

<!-- contacto -->
<div class="proximos-webinar">
  <div class="container">
    <div class="left-side">
      <h2 class="webinars-font">Proximos Webinars</h2>
      <!-- <img src="imagen/webinar/webinar1.png" class="img-fluid" alt="imagen webinar" width="100%"> --> 
      <div class="optionWebinar">
        <ul class="optionWebinar-space">
          <li><p>Elige un webinar y registrate</p></li>
          <li>
            <input type="checkbox" onclick="checkbox(this.id)" class="checkbox" name="applicare" id="applicare">
            <span>Applicare</span>
          </li>
          <li><input type="checkbox" onclick="checkbox(this.id)" class="checkbox" name="foglight" id="foglight"><span>Foglight</span></li>
          <li><input type="checkbox" onclick="checkbox(this.id)" class="checkbox" name="sql" id="sql"><span>SQL PI</span></li>
          <br>
        </ul>
      </div> 
    </div>

<div class="right-side">
	<div class="contacto-webinar">
		<div class="registrate">
			<p>Registrate para obtener el link</p>
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


<!-- aqui termina el formulario -->
<div class="pop-webinar pop-close" id="pop-webinar">
  <div class="pop-container">
    <div class="pop-space">
      <div class="pop-title">
        <p>URL WEBINAR</p>
        <span class="close_pop" onclick="closeModal()">x</span>
      </div>
      <div class="pop-body">
        <div class="pop-text" id="idPop">
          
        </div>
        <div class="pop-control">
          <a href="#close" onclick="closeModal()">Cerrar</a>
        </div>
      </div>
    </div>
  </div>
</div>
  

<?php
        include("footer.php");
?>