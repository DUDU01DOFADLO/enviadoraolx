<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Cabeçalhos do e-mail
    $headers = "From: seuemail@seudominio.com\r\n";
    $headers .= "Reply-To: seuemail@seudominio.com\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Envio
    if (mail($para, $assunto, nl2br($mensagem), $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar e-mail.";
    }
} else {
    echo "Acesso inválido.";
}
?>
