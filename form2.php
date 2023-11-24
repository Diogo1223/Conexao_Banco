<?php
 if(isset($_POST["submit"])){
    include_once("config.php");

    $nome_empresa = $_POST["empresa"];
    $CNPJ = $_POST["CNPJ"];
    $endereco = $_POST["endereco"];
    $numero_telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $response = mysqli_query($conexao, "INSERT INTO empresa(nome_empresa,CNPJ,endereco,numero_telefone,endereco_email) VALUES('$nome_empresa','$CNPJ','$endereco','$numero_telefone'$email')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Empresa</title>
</head>
<body>
    <form action="form2.php" method="post">
        <div class="login">
        <h2>Informações da empresa</h2><br>

        <label for="">Nome da empresa</label>
        <input type="text" name="empresa" id="empresa"> <br><br>

        <label for="">CNPJ</label>
        <input type="number" name="CNPJ" id="CNPJ"> <br><br>

        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco"><br><br>

        <label for="">Numero telefone</label>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="">E-mail</label>
        <input type="text" name="email" id="email"> <br><br>

        <input type="submit" value="Enviar">
        <a href="login.html">Voltar</a>
    </div>
    </form>
</body>
</html>