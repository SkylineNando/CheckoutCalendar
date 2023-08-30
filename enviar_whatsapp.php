<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataEntrada = $_POST["data_entrada"];
    $dataSaida = $_POST["data_saida"];
    $quantidadePessoas = $_POST["quantidadePessoas"];
    $quantidadeCriancas = $_POST["quantidadeCriancas"];

    // Configurar a integração com a API do WhatsApp aqui e enviar a mensagem
    // Você precisará de uma biblioteca ou serviço que permita enviar mensagens via WhatsApp API
    // Substitua as variáveis abaixo pelos valores reais de API e números de telefone
    $apiKey = "SUA_API_KEY";
    $recipientNumber = "NUMERO_DESTINATARIO";
    
    $mensagem = "Reserva feita!\nData de Entrada: $dataEntrada\nData de Saída: $dataSaida\nQuantidade de Pessoas: $quantidadePessoas\nQuantidade de Crianças: $quantidadeCriancas";

    echo "Reserva enviada com sucesso via WhatsApp! $mensagem";
} else {
    echo "Erro ao processar o formulário.";
}
?>
