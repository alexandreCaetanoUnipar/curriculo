<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gerador de Currículo</h1>
        <form id="resumeForm" action="php/generate.php" method="POST" target="_blank">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Data de Nascimento</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="age">Idade</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            
            <!-- Campos dinâmicos para Experiências Profissionais -->
            <div id="experienceSection">
                <h4>Experiências Profissionais</h4>
                <div class="form-group experience-group">
                    <label for="experience">Experiência</label>
                    <input type="text" class="form-control" name="experience[]" placeholder="Descrição da experiência" required>
                </div>
            </div>
            <button type="button" id="addExperience" class="btn btn-primary">+ Adicionar Experiência</button>

            <!-- Campos dinâmicos para Referências Pessoais -->
            <div id="referencesSection" class="mt-4">
                <h4>Referências Pessoais</h4>
                <div class="form-group reference-group">
                    <label for="reference">Referência</label>
                    <input type="text" class="form-control" name="reference[]" placeholder="Descrição da referência" required>
                </div>
            </div>
            <button type="button" id="addReference" class="btn btn-primary">+ Adicionar Referência</button>
<button type="submit" class="btn btn-success mt-4">Gerar Currículo</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
