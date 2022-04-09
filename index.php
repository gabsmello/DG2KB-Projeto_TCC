
<?php
    include('conexao.php');

    if(isset($_POST['usuario']) || isset($_POST['senha'])) {

        if(strlen($_POST['usuario']) == 0) {
            echo "<script type='text/javascript'>alert('Preencha seu nome');</script>";
        } else if(strlen($_POST['senha']) == 0) {
            echo "<script type='text/javascript'>alert('Preencha sua senha');</script>";
        } else {
            $usuario = $conexao->real_escape_string($_POST['usuario']);
            $senha = $conexao->real_escape_string($_POST['senha']);
    
            $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
    
            $quantidade = $sql_query->num_rows;
    
            if($quantidade == 1) {
    
                header('Location: cadastro-da-turma.php');
    
            } else {
                //echo "Falha ao logar! Registro ou senha incorretos";
                $message = "Usuario ou senha incorretos";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
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
    <title>Secretaria - Login</title>
</head>
<body>
    
    <header id="cabecalho" class="padding">
        <nav class="menu">    
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Secretária</a></li>
                <li><a href="">Instruções Gerais</a></li>
                <li><img src="./images/logo-senai.png" alt="Logo Senai" class="logo" width="170"></li>
            </ul>
        </nav>
    </header>
    <main class="padding">
        <form method="POST" action="">
        
            <h1>Secretaria</h1>
            <div class="background-form">
                <h2>Login</h2>
                <a class="cadastro" href="./cadastro-de-colaborador.php">Cadastre-se</a>
                <div class="colaboracor">
                    <label for="colaborator">Colaborador</label>
                </div>
                <input type="text" name="usuario" id="colaborator">
                
                <div class="senha">
                    <label for="password">Senha</label>
                </div>
                <input type="password" name="senha" id="password">
                
                <input id="submit" type="submit" value="Entrar" name="submit">
                
                <p class="restricao">Acesso restrito a funcionários da administração e coordenação</p>
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
