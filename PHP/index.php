<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $asunto = 'formulario rellenado';
    $mensaje = "Nombre: ".$name."<br> Email: $email<br> Mensaje:"."Mensaje: ".$message.$_POST['mensaje'];

    if(mail('manuelsebastiandls@gmail.com', $asunto, $mensaje )){
        echo "Correo enviado";
    }

?>