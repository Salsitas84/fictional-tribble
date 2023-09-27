<?php

if(isset($_POST['emp']) && !empty($_POST['emp']) &&
isset($_POST['mail']) && !empty($_POST['mail']) &&
isset($_POST['asunto']) && !empty($_POST['asunto']) &&
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
  $destinatario="contactoa@xpressionvisual.com";
  $asunto="Contacto de la pagina XpressionVisual";
  $empresa=$_POST['emp'];
  $mensaje="Detalles del formulario contacto: \n\n";
  $mensaje .="EMPRESA: " . $_POST['emp'] . "\n";
 $mensaje .="CORREO: " . $_POST['mail'] . "\n";
  $mensaje .="ASUNTO: " . $_POST['asunto'] . "\n";
 $mensaje .="COMENTARIO: ". $_POST['mensaje'] . "\n\n";
 $headers='From: ' . $empresa . "\r\n";
   mail($destinatario, $asunto, $mensaje, $headers);
       header ("Location: enviado.html");
}
else{
  header("Location: noenviado.html");
}

	?>
