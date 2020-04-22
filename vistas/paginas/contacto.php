<?php
 
if($_POST) {
    $nombre = "";
    $numero = "";
    $email = "";
    $concerned_department = "";
    $message = "";
     
    if(isset($_POST['nombre'])) {
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    $email_title = 'Contacto de cliente';

    if(isset($_POST['numero'])) {
        $numero = filter_var($_POST['numero'], FILTER_SANITIZE_INT);
    }

    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
    }

    $recipient = "mail@mail.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
    
    mail($recipient, $email_title, $message, $headers);
         
} else {
    $texto = '<p>Algo ha salido mal, Disculpe las molestias.</p>';
}
 
?>

<div class="contactos">

        <h2>Contactos</h2>
        <div class="formularioinfo">
            <div class="formulario">
            <b><form action="?pagina=contacto" method="post">
                        <div class="container-input">
                            <label for="nombre">nombre</label>
                            <input type="text" name="" id="nombre" placeholder="nombre">
                        </div>
                        <div class="container-input">
                            <label for="numero">número</label>
                        <input type="number" name="" id="numero" placeholder="numero de contacto">
                        </div>
                        <div class="container-input">
                        <label for="email">correo electronico</label>
                        <input type="email" name="" id="email" placeholder="correo de contacto">
                        </div>
                        <div class="container-input">
                        <label for="textarea">dejanos tu mensaje acá</label>
                        <textarea name="" id="message" cols="20" rows="10" placeholder="Dejanos tu mensaje en este recuadro"></textarea>
                        </div>
                        <div class="container-input-submit">
                        <input class="submit" type="submit" value="Enviar" >
                        </div>
                    </form> </b>
                </div>
                <div class="informacion">
                    <p>puedes contactarnos mediante el formulario que esta aca o tambien puedes contactarnos mediante:</p>
                    <address>
                        <ol>
                            <li>celular:</li>
                            <li>mail:</li>
                            <li>visitanos: </li>
                            <li></li>
                        </ol>
                    </address>
            </div>

        </div>
            
            
                <div class="cotacto-localizacion">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3473853063065!2d-74.10622948502237!3d4.7095803428913365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84b4f9bca647%3A0x4ade4d58f6d1f20c!2sPerromono!5e0!3m2!1ses-419!2sar!4v1586642585450!5m2!1ses-419!2sar" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
</div>