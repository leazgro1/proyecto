<?php
		include("barra.php");
  ?>

<script type="text/javascript">
function opcionCheck(){
  var ap = document.getElementById('checkbox1');
  var fo = document.getElementById('checkbox2');
  /* var sql = document.getElementById('sql'); */
  var opcion = 0;
  if(ap.checked){
    opcion = 1
  }else if(fo.checked){
    opcion = 2;
  }/* else if(sql.checked){
    opcion = 3;
  } */
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
        "descripcion":descripcion,
        "opcion":opcionCheck()
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
            limpiar();
            document.getElementById("idPop").innerHTML ='<a href="'+data+'" target="_blank">Click url webinar</a><p>Url webinar: '+data+'</p>';
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
  var ap = document.getElementById('checkbox1');
  var fo = document.getElementById('checkbox2');
  /* var sql = document.getElementById('sql'); */
  ap.checked = false; 
  fo.checked = false; 
  /* sql.checked = false;   */
  document.getElementById(id).checked = true;
}
function limpiarCheck(){
  var ap = document.getElementById('checkbox1');
  var fo = document.getElementById('checkbox2');
 
  ap.checked = false; 
  fo.checked = false; 
  /* sql.checked = false; */ 
} 

function check1(box) {
if (box.checked) {

document.getElementById("checkbox2").checked=false
}
}
function check2(box) {
if (box.checked) {
document.getElementById("checkbox1").checked=false
}
}

</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Modak&family=Open+Sans:wght@600&family=Roboto:ital@1&display=swap" rel="stylesheet">
<style>
   /*  .my-container{
        border: 1px solid green;
    }
    .my-row{
        border: 3px solid red;
    }
    .my-col{
        border: 3px dotted blue;
        height: 250px;
     */}
    .alto{
        height: 200px;
    } 
    .alto2{
        height: 500px;
    }
    .imagen{
      background-image: url(imagen/webinar/meeting.jpg);
      /* Set a specific height */
      height: 300px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      color: #fff;
      padding: 30px 0;
      text-shadow: 0 0 10px #878686;
    }
    .letra{
        font-family: 'Open Sans', sans-serif;
        font-size: 1em;
        margin-top: 0%;
        text-align: center;
        margin-bottom: 2%;
    }
    .letra1{
      font-family: roboto;
      font-size: 1.5em;
      text-align:left;
    }
    .letra2{
      font-family: roboto;
      font-size: 1em;
      text-align:right;
    }
    .font-title{
      align: right;
    }
    hr.new5 {
      border: 10px solid grey;
      border-radius: 5px;
    }
</style>


<div class="container-fluid imagen">
    <div class="container my-container">
        <div class="row my-row">
            <div class="col-sm-12 col-md-12 text-center py-5">
              <br><br><br>
             <h1 class="display-6">Prox&iacute;mos Webinars</h1>
             <p class="letra">Selecciona uno y reg&iacute;strate</p>
            </div>
        </div>
    </div>        
</div>
<div class="container my-container">        
    <div class="row my-row">
        <div class="col-sm-12 col-md-12 my-col letra1">
          <br>
          <input id="checkbox1" type="checkbox" onclick="check1(this)" name="applicare" class= "font-title" ><span>&nbsp;&nbsp;<strong> Applicare </strong></span>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbspCon Applicare podrás ver el desempeño de tus servidores de aplicación.</p>
          <p class="letra2">20 agosto 2020 <br> 4pm CST.</p>
        </div>
    </div>
    <hr style="width: 100%; border: 1px solid; opacity: 0.2;">
    <div class="row my-row">
        <div class="col-sm-12 col-md-12 my-col letra1">
          <input id="checkbox2" type="checkbox" onclick="check2(this)" name="foglight"><span>&nbsp;&nbsp;<strong>Foglight </strong></span>
          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbspCon Foglight podrás ver el desempeño de tus servidores de aplicación.
          <p class="letra2">25 agosto 2020 <br> 4pm CST.</p>
        </div>
    </div>      
    <hr style="width: 100%; border: 1px solid; opacity: 0.2;">
    <div class="row my-row alto2">
        <div class="col-md-6 col-md-offset-3 my-col">
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