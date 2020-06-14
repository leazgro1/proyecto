var myxtix = {
version: '1.2',
};
/*get---post--*/
function my_ajax(opciones){
var xml = new XMLHttpRequest();
if(opciones.tipo=="GET"){
xml.addEventListener('load', mostrar, false);
xml.open("GET",opciones.url+"?"+opciones.dato, true);
xml.send();
}
if(opciones.tipo=="POST"){
xml.addEventListener('load', mostrar, false);
xml.open("POST",opciones.url, true);
xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xml.send(opciones.dato);
}
function mostrar(e){
cajadatos=document.getElementById(opciones.respuesta);
cajadatos.innerHTML=e.target.responseText;
}
}
