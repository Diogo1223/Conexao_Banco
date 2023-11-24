<?php
if(isset($_POST["submit"])){
    include_once("config.php");

    $nome = $_POST["nome"];
    $numero_registro = $_POST["numero_registro"];
    $registro_proficional = $_POST["registro_proficional"];
    $numero_telefone = $_POST["numero_telefone"];
    $endereco_email = $_POST["endereco_email"];

    $response = mysqli_query($conexao, "INSERT INTO contador(nome,numero_registro,registro_proficional,numero_telefone,endereco_email) VALUES('$nome','$numero_registro','$registro_proficional','$numero_telefone','$endereco_email')");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contador</title>
</head>
<body>
    <form action="form1.php" method="post">
        <div class="login">
        <h2>Informações do contador</h2><br>

        <label for="">Nome</label>
        <input type="text" name="nome" id="nome"> <br><br>

        <label for="">Numero de Registro</label>
        <input type="text" name="numero_registro" id="numero_registro"><br><br>

        <label for="">Registro proficional</label>
        <input type="text" name="registro_proficional" id="registro_proficional"><br><br>

        <label for="">Numero telefone</label>
        <input type="text" name="numero_telefone" id="numero_telefone"><br><br>

        <label for="">E-mail</label>
        <input type="text" name="endereco_email" id="endereco_email"><br><br>

        <input type="submit" name="submit">
        <a href="login.php">Voltar</a>
    </div>
    </form>
    
</body>
</html>