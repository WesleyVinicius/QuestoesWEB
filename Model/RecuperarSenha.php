<?php
require_once('../Controller/class.phpmailer.php'); //chama a classe de onde você a colocou.
include("../Controller/connection.php");

$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'seuemail@gmail.com'; // usuario gmail.   
$mail->Password = 'suasenhadogmail'; // senha do email.

$mail->SingleTo = true; 

//pega a variavel via post
$email = $_POST['email'];
//busca no db o usuario com o email 
$result = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email='$email'");
//conta quantos tem
$num_rows = mysqli_num_rows($result);
//se tiver  + de 1 cadastrado
if($num_rows=='1'){
	//faz um while para vc coloar os dados nas variavels
	while($Row_email = mysqli_fetch_array($result)){
		$rowemail = $Row_email['email'];
		$rowsenha = $Row_email['senha'];
		}
		
//enviar um email para variavel email juntamente com a variável senha;

$mensage .="E-mail= " . $rowemail;
$mensage .="Senha:" . $rowsenha;
mail($rowemail, "QuestõesWEB, recuperação de senha", $mensage);

echo"<script>alert(Sua senha foi enviada para o e-mail indicado.)</script>";


}else{
	
	
	echo"<script>alert('E-mail não cadastrado em nosso sistema')</script>";
	
}

// configuração do email a ver enviado.
$mail->From = $mensage; 
$mail->FromName = "QuestõesWEB"; 

$mail->addAddress($rowemail); // email do destinatario.

$mail->Subject = "Você solicitou a recuperação de senhha confira seu dados."; 
$mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

if(!$mail->Send())
    echo "Erro ao enviar Email:" . $mail->ErrorInfo;

?>

