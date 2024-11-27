<?php
// Configuração do banco de dados
$servername = "localhost"; // Endereço do servidor (ou "127.0.0.1")
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "confeitaria"; // Nome do banco de dados

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['phone']);
    $data_reserva = $conn->real_escape_string($_POST['date']);
    $hora_reserva = $conn->real_escape_string($_POST['time']);
    $numero_pessoas = $conn->real_escape_string($_POST['people']);
    $mensagem = $conn->real_escape_string($_POST['message']);

    // Criar a consulta SQL para inserção
    $sql = "INSERT INTO reservas (nome, email, telefone, data_reserva, hora_reserva, numero_pessoas, mensagem) 
            VALUES ('$nome', '$email', '$telefone', '$data_reserva', '$hora_reserva', '$numero_pessoas', '$mensagem')";

    // Executar a consulta
    if ($conn->query($sql) === TRUE) {
        // echo "Sua reserva foi enviada com sucesso!";
        echo "OK";

    }
}

// Fechar a conexão
$conn->close();
?>
