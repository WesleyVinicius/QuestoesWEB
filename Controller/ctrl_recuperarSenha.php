<?php
    require_once('../PHPMailer/PHPMailerAutoload.php');
    
    $email = $_POST['email'];

    define('usuario', 'contato.questoesweb@gmail.com');
    define('senha', 'tccads2017');

    function smtpmailer($destinatario, $remetente, $nome_remetente, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		
	$mail->SMTPDebug = 4;		
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = usuario;
	$mail->Password = senha;
        $mail->SetFrom($remetente, $nome_remetente);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($destinatario);
        
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
    }
    
    if (smtpmailer($email, 'contato.questoesweb@gmail.com', 'QuestõesWEB', 'Recuperação de senha', 'fora temer')) {

	Header("location:index.php");

    }
    if (!empty($error)) 
        echo $error;
?>