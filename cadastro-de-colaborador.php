<?php
    include('conexao.php');
    
    if(isset($_POST['usuario']) || isset($_POST['senha'])) {
        if(strlen($_POST['usuario']) == 0) {
            echo "<script type='text/javascript'>alert('Preencha seu nome');</script>";
        } else if(strlen($_POST['senha']) == 0) {
            echo "<script type='text/javascript'>alert('Preencha sua senha');</script>";
        } else {
            $senha = $_POST['senha'];
            $usuario = $_POST['usuario'];
    
            $sql = "INSERT INTO usuarios VALUES";
            $sql .= "(null, '$usuario', '$senha')";
            mysqli_query($conexao,$sql) or die ("Erro ao cadastrar");
            mysqli_close($conexao);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/secretaria-login.css">
    <title>Cadastro de Colaborador</title>
</head>
<body>
    <header id="cabecalho" class="padding">
        <nav class="menu">    
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="./index.php">Secretária - Login</a></li>
                <li><a href="">Instruções Gerais</a></li>
                <li><img src="./images/logo-senai.png" alt="Logo Senai" class="logo" width="170"></li>
            </ul>
        </nav>
    </header>
    <main class="padding">
        <form method="POST" action="">
        
            <h1>Secretaria</h1>
            <div class="background-form">
                <h2>Cadastro</h2>
                <div class="colaboracor">
                    <label for="colaborator">Colaborador</label>
                </div>
                <input type="text" name="usuario" id="colaborator">
                
                <div class="senha">
                    <label for="password">Senha</label>
                </div>
                <input type="password" name="senha" id="password">
                
                <input id="submit" type="submit" value="Cadastrar" name="submit">
            </div>
            

        </form>
    </main>
    <footer class="padding">
        <p>SENAI - Todos os direitos reservados</p>
        <div class="dg2kb">
            <p>Elaboração e Desenvolvimento</p>
            <span><img src="./images/logo-dg2kb.png" alt="Logo dg2kb" width="100"></span>
        </div>
    </footer>
</body>
</html>
