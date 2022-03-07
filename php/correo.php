<?php
    if (isset($_POST['enviar'])){
        if (!empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['asunto'])) {
            $nombre= $_POST['apellido'].", ".$_POST['nombre'];
            $asunto= "Quiero conectarme para una consulta";
            $mensaje= $_POST['asunto'];
            $mail= $_POST['email'];
            $mailmi="pablo_seme@hotmail.com";
            //$header="From : noreply@example.com" . "\r\n";
            //$header.="Reply-To: noreply@example.com" . "\r\n";
            //$header.="X-Mailer: PHP/". phpversion();

            $cuerpo="De: $nombre \n";
            $cuerpo.="Correo: $mail \n";            
            $cuerpo.="Mensaje: $mensaje";
        

            $mailok=@mail($mailmi,$asunto,$cuerpo); //,$header);
            if ($mailok){
                //echo "<h3> Mail enviado correctamente !!</h3>";
                
                header('Location:../index.html');             
            }

        }
    }

?>