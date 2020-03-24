<?php
   require 'PHPMailer/PHPMailerAutoload.php';
   require 'PHPMailer/class.phpmailer.php';
   require 'PHPMailer/class.phpmaileroauthgoogle.php';

    /*if($_POST)
     {
        $cn = mysql_connect('localhost', 'root', 'root') or die (msql_error());
        mysql_select_db('vidracaria', $cn);
        
        $query = 'INSERT INTO usuarios';

        mysql_query($query);
     }*/

    $nome       = $_POST['nome'];
    $email      = $_POST['email'];
    $telefone   = $_POST['telefone'];
    $operadora  = $_POST['operadora'];
    $textarea   = $_POST['desc-orcamento'];
    $cep        = $_POST['cep'];
    $qtd_prd    = $_POST['qtd-prd'];
    $altura     = $_POST['altura'];
    $largura    = $_POST['largura'];
    $tipos_serv = $_POST['tipos_servicos'];
    $instal_jan = $_POST['instal_janela'];
    $instal_sac = $_POST['instal_sacada'];
    $porta_vidro = $_POST['porta_vidro'];
    $instal_esp = $_POST['instal_espelho'];
    $mesa_vidro = $_POST['mesa_vidro'];
    $instal_box = $_POST['instal_box'];
    $vidro_blin = $_POST['vidros_blin'];
    $limpeza    = $_POST['limpeza'];
    $espera     = $_POST['periodo_espera'];

    echo "Seu nome é $nome <br> e seu email é <br> $email <br> e telefone é $telefone e operador é <br> $operadora";
    echo "<br><br>$textarea";
    echo "<br> $cep <br> $largura <br> $altura <br> $tipos_serv <br> $qtd_prd <br> $instal_jan";
    echo "<br> $espera <br> $vidro_blin <br> $instal_sac <br> $instal_esp <br><br>";

 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = 'smtp.gmail.com'; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587; 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';    // TLS REQUERIDO pelo GMail
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'sidsantiago18@gmail.com'; 
$mail->Password = 'santiago5.0'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
 $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "sidsantiago18@gmail.com"; 
 
// Seu nome 
$mail->FromName = "Vidracaria "; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Orçamento"; 
 
// Corpo do email 
$mail->Body = $textarea; 
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 

echo !extension_loaded('openssl')?"<br> Not Available":"<br> Available";