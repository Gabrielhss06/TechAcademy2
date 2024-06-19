<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Configurações para enviar o email
    $to = "gabrielkidss22@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    // Cabeçalhos do email
    $headers = "From: $email";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='text-success'>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p class='text-danger'>Ocorreu um erro ao enviar a mensagem.</p>";
    }
} else {
    // Se o método de requisição não for POST, redireciona para a página inicial ou exibe uma mensagem de erro
    echo "<p class='text-danger'>Erro: O formulário deve ser submetido via POST.</p>";
}
?>