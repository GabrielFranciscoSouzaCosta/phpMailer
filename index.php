<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="button" value="Enviar Email">
    <form action="" method="post">
        <input type="text" name="conteudo" id="conteudo">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>
<?php
    // if( isset( $_POST['enviar'] ) )
    // {
    //     require 'vendor/autoload.php';

    //     $mail = new PHPMailer( true );
    //     $conteudo = isset( $_POST['conteudo'] ) ? $_POST['conteudo'] : "Mensagem padrão com html <b>negrito!</b>";

    //     $host = 'smtp.gmail.com'; // define SMTP address from google
    //     $username = '[USERNAME]@gmail.com';
    //     $password = '[PASSWORD]';

    //     try
    //     {
    //         // myaccount.google.com/security -> Habilitar Acesso a app menos seguro
    //         $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    //         $mail->isSMTP();
    //         $mail->Host       = $host;
    //         $mail->SMTPAuth   = true; // Enable SMTP authentication
    //         $mail->Username   = $username;
    //         $mail->Password   = $password;
    //         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //         $mail->Port       = 587;

    //         $mail->setFrom('[REMETENTE]@gmail.com', '[NOME]');
    //         $mail->addAddress('[DESTINATARIO]@gmail.com ', '[NOME]');

    //         // Anexos
    //         // $mail->addAttachment('/var/www/html/gabriel/anexo.jpg');
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //         // Content
    //         $mail->isHTML( true );
    //         $mail->Subject = '[SUBJECT]';
    //         $mail->Body    = $conteudo;
    //         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //         $mail->send();
    //         echo 'Message sent';
    //     }
    //     catch ( Exception $e )
    //     {
    //         echo "Message could not be sent. Mailer Error: { $mail->ErrorInfo }";
    //     }
    // }