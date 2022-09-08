<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EnviaMensagem
{
    private $destinatario = null;
    private $assunto = null;
    private $descricao = null;
    private $status = array('codigo-status' => null, 'descricao-status' => '');

    public function __get($atribute)
    {
        return $this->atribute;
    }

    public function __set($atribute, $value)
    {
        $this->atribute = $value;
    }

    public function validMessage()
    {
        if ((empty($this->destinatario) || empty($this->assunto) || empty($this->descricao))) {
            return false;
        }
        return true;
    }
}


$mensagem = new EnviaMensagem();

$mensagem->__set('destinatario', $_POST['destinatario']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('descricao', $_POST['descricao']);

if (!$mensagem->validMessage()) {
    echo "Mensagem não é válida";
    header('Location: index.php');
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mcpedrohenriquelc3@gmail.com';                     //SMTP username
    $mail->Password   = ''; // Senha do e-mail aqui
                                   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mcpedrohenriquelc3@gmail.com');
    $mail->addAddress($mensagem->__get('destinatario'));     //Add a recipient
    //$mail->addReplyTo('mcpedrohenriquelc3@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mensagem->__get('assunto');
    $mail->Body    = $mensagem->__get('descricao');
    $mail->AltBody = 'Um cliente que interprete HTML é necessário para visualizar essa mensagem em sua totalidade';

    $mail->send();

    $mensagem->status['codigo-status'] = 1;
    $mensagem->status['descricao-status'] = 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    $mensagem->status['codigo-status'] = 2;
    $mensagem->status['descricao-status'] = 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>App Mail Send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">

        <div class="py-3 text-center">
            <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
            <h2>Send Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php if ($mensagem->status['codigo_status'] == 1) { ?>

                    <div class="container">
                        <h1 class="display-4 text-success">
                            Sucesso!
                        </h1>
                        <p> <?= $mensagem->status['descricao-status']; ?> </p>
                        <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>

                <?php } ?>

                <?php if ($mensagem->status['codigo_status'] == 2) { ?>
                    <div class="container">
                        <h1 class="display-4 text-danger">
                            Ops! Algo deu errado.
                        </h1>
                        <p> <?= $mensagem->status['descricao-status']; ?> </p>
                        <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>