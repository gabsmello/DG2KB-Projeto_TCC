<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/unidades-curriculares.css">
    <link rel="stylesheet" href="css/default.css">
    <title>Document</title>
</head>
<body>
    <header id="cabecalho" class="padding">
        <nav class="menu">    
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./cadastro-da-turma.php">Cadastro da turma</a></li>
                <li><a href="./cadastro-de-alunos.php">Cadastro de alunos</a></li>
                <li><a href="./conteudo-formattivo.php">conteúdo formativo</a></li>
                <li><a href="./unidades-curriculares.php">unidades curriculares</a></li>
                <li><a href="./cadastro-de-cursos.php">cadastro de cursos</a></li>
                <li><img src="./images/logo-senai.png" alt="Logo Senai" class="logo" width="170"></li>
            </ul>
        </nav>
    </header>
    <main class="padding">
        <form action="">
            <section id="section1">
                <div class="container-turma">
                    <label for="turma">
                        Turma
                    </label>
                    <select name="turmas" id="turmas">
                        <optgroup>
                            <option value="a">a</option>
                            <option value="b">a</option>
                            <option value="c">a</option>
                            <option value="d">a</option>
                        </optgroup>
                    </select>
                </div>
                <div class="container-curso">
                    <label for="curso">
                        Curso
                    </label>
                    <select name="cursos" id="cursos">
                        <optgroup>
                            <option value="a">a</option>
                            <option value="b">a</option>
                            <option value="c">a</option>
                            <option value="d">a</option>
                        </optgroup>
                    </select>
                </div>
                <div class="container-botao">
                    <input type="submit" value="Cadastrar Docente" >
                </div>
            </section>
    
            <section id="section2">
                <table border="1">
                    <thead>
                        <tr>
                            <th>UC</th>
                            <th>TItulo da unidade curricular</th>
                            <th>Carga horária</th>
                            <th>NI</th>
                            <th>Docentes</th>
                            <th>Ambiente de ensino (Sala)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="section3">
                <input id="btn-liberar" type="submit" value="Liberar turma para controle dos docentes">
            </section>
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