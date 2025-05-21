<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = "cdfelipe@hotmail.com";
    $assunto = "Respostas da Atividade SQL";

    $mensagem = "Respostas do aluno: $aluno\n\n";

    for ($i = 1; $i <= 30; $i++) {
        $resposta = isset($_POST["q$i"]) ? trim($_POST["q$i"]) : "(sem resposta)";
        $mensagem .= "Questão $i:\n$resposta\n\n";
    }

    $cabecalhos = "From: atividade_sql@seudominio.com\r\n" .
                  "Reply-To: atividade_sql@seudominio.com\r\n" .
                  "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($destinatario, $assunto, $mensagem, $cabecalhos)) {
        echo "<h2>Respostas enviadas com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao enviar respostas.</h2>";
    }
}
?>
