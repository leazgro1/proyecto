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
        //creacion de txt
        $contenido=" Nombre: $nombre Empresa: $compania Telefono $tel Correo: $correo Descripcion: $desc";
        $archivo = "";
        $archivo=fopen("txt-webinar/clientes.txt","a");
        // escribimos la informacion 
        fwrite ($archivo,$contenido);
        echo "http://ixpia.com.mx";
    }

?>