<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de aluno</title>
</head>
<body>
    <h1>Novo Aluno</h1>
    <form method="POST" action="index.php">
        <p>
            <label>Nome:</label>
            <input type ="text" name="nome" required></input>
        </p>
        <p>
            <label>Email::</label>
            <input type ="text" name="email" required></input>
        </p>
        <p>
            <label>Matrícula:</label>
            <input type ="text" name="matricula" required></input>
        </p>

        <button type="submit">Salvar Aluno</button>
        <a href="index.php">Voltar para a lista</a>
    </form>
</body>
</html>