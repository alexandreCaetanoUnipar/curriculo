<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $age = htmlspecialchars($_POST['age']);
    $experiences = $_POST['experience'];
    $references = $_POST['reference'];

    // Criação do currículo
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Currículo de $name</title>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    </head>
    <body>
        <div class='container mt-5'>
            <h1>Currículo de $name</h1>
            <p><strong>Data de Nascimento:</strong> $dob</p>
            <p><strong>Idade:</strong> $age anos</p>
            
            <h4>Experiências Profissionais</h4>";
            foreach ($experiences as $experience) {
                echo "<p>- " . htmlspecialchars($experience) . "</p>";
            }
            
            echo "<h4>Referências Pessoais</h4>";
            foreach ($references as $reference) {
                echo "<p>- " . htmlspecialchars($reference) . "</p>";
            }

    echo "<button onclick='window.print()' class='btn btn-primary mt-4'>Imprimir Currículo</button>
        </div>
    </body>
    </html>";
} else {
    echo "Método não permitido.";
}
?>
