<?php

	/*$nombre = $_POST['nombre']; 
    $compania = $_POST['compania']; 
    $tel = $_POST['tel']; 
    $correo= $_POST['correo'];
    $desc = $_POST['descripcion'];
    
    echo "Respuesta de php: ".$nombre." ".$compania." ".$tel." ".$correo." ".$desc;
    */  
    if(empty($_POST['nombre']) || empty($_POST['compania']) || empty($_POST['tel']) || empty($_POST['correo']) || empty($_POST['descripcion'])) {//si estan vacios
        echo "false";
    }else{
        $nombre = $_POST['nombre']; 
        $compania = $_POST['compania']; 
        $tel = $_POST['tel']; 
        $correo= $_POST['correo'];
        $desc = $_POST['descripcion']; 
        $opcion = $_POST['opcion'];
        //creacion de txt
        $contenido=" Nombre: $nombre Empresa: $compania Telefono $tel Correo: $correo Descripcion: $desc opcion: $opcion";
        $archivo = "";
        $archivo=fopen("txt-webinar/webinar_grabados.txt","a");
        // escribimos la informacion 
        fwrite ($archivo,$contenido);
        $url = "";
        if($opcion == 1){
            $url = "webinar_foglight.php";
        }else if($opcion == 2){
            $url = "webinar_applicare.php";
        }/* else if($opcion == 3){
            $url = "http://www.twitter.com";
        } */
        echo $url;
    }

?>