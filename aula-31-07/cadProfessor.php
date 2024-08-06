<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro professor</title>
</head>
<body>
    <form action="crudprofessor.php" method='POST'>
        <label for="">Nome professor</label>
        <input type="text" name="nome">
        <label for="">ID professor</label>
        <input type="number" name="idprof">
        <label for="">Endereço</label>
        <input type="text" name="endereco">
        <label for="">Idade</label>
        <input type="number" name="idade">
    <input type="submit" name="cadastrar" value="cadastrar">
    </form>
</body>
</html>