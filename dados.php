<?php
   require 'PHPMailer/PHPMailerAutoload.php';
   require 'PHPMailer/class.phpmailer.php';
   require 'PHPMailer/class.phpmaileroauthgoogle.php';

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

    echo  $textarea."<br><br>"."Nome: ".$nome."<br>"."Email para contato: ".$email."<br>"."Telefone para contato: ".$telefone." "." Operadora: ".$operadora."<br>"."CEP: ".$cep."<br>"."Altura e Largura: ".$altura." X ".$largura.
    "<br>"."Quantidade Requerida: ".$qtd_prd."<br>"."Período de Espera: ".$espera."<br>"."Serviço Requisitado: ".$tipos_serv."<br>".$instal_box."<br>".$instal_sac."<br>".
    $instal_jan."<br>".$mesa_vidro."<br>".$vidro_blin."<br>".$limpeza."<br>";

    //UPLOAD DE ARQUIVOS
    if(isset($_POST['enviar'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $QuantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

            while($contador < $QuantidadeArquivos):


        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
        //$textarea = $formatosPermitidos;
        
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                echo "Upload feito com sucesso para $pasta.$novoNome <br>";
             else:
                echo "Erro, não foi possivel fazer o upload do arquivo $temporario";
             endif;
        else:
          echo "Formato inválido $extensao";
          endif;   
                $contador++;
                endwhile;    
    endif;  
 echo $mensagem;

/// Inicia a classe PHPMailer 
/*$mail = new PHPMailer(); 
 
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
$mail->Password = 'inserirSenha'; 
 
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
$mail->Body =  $textarea."<br><br>"."Nome: ".$nome."<br>"."Email para contato: ".$email."<br>"."Telefone para contato: ".$telefone." "." Operadora: ".$operadora."<br>"."CEP: ".$cep."<br>"."Altura e Largura: ".$altura." X ".$largura.
               "<br>"."Quantidade Requerida: ".$qtd_prd."<br>"."Período de Espera: ".$espera."<br>"."Serviço Requisitado: ".$tipos_serv."<br>".$instal_box."<br>".$instal_sac."<br>".
               $instal_jan."<br>".$mesa_vidro."<br>".$vidro_blin."<br>".$limpeza."<br>";


 
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