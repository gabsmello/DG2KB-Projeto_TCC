<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-da-turma.css">
    <link rel="stylesheet" href="./css/default.css">
    <title>Cadastro da Turma</title>
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
                <div class="inputs">
                    <label for="">
                        Nº Proposta
                        <input type="text" id="n-proposta">
                    </label>
                </div>
                <div class="inputs">
                    <label for="">
                        Turma
                        <input type="text" id="turma">
                    </label>
                </div>
                <div class="inputs">
                    <label for="emissao">
                        Data de Emissão
                        <input type="text" id="emissao">
                    </label>
                </div>
                <div class="inputs">
                    <label for="local">
                        Local
                        <input type="text" id="local">
                    </label>
                </div>

                <div class="inputs">
                    <label for="atendimento">
                        Atendimento
                        <input type="text" id="local">
                    </label>
                </div>

                <div class="inputs">
                    <label for="valor-curso">
                        Valor do Curso
                        <input type="text" id="valor-curso">
                    </label>
                </div>

                <div class="inputs">
                    <label for="quant-parcelas">
                        Quant. Parcelas
                        <input type="text" id="quant-parcelas">
                    </label>
                </div>

                <div class="inputs">
                    <label for="atendimento">
                        Valor da Parcela
                        <input type="text" id="local">
                    </label>
                </div>
            </section>
    
            <section id="section2">
                <div class="container-cursos"> 
                    <label for="cursos">
                        Curso
                        <select name="" id="cursos">
                            <optgroup>
                                <option value="">a</option>
                                <option value="">a</option>
                                <option value="">a</option>
                                <option value="">a</option>
                                <option value="">a</option>
                            </optgroup>
                        </select>
                    </label>
                </div>
                <div class="containerhorarios">
                    <div>
                        <label for="carga-horaria">
                            Carga horária do curso
                            <input type="text " id="carga-horaria">
                        </label>   
                    </div>
                    <div>
                        <label for="carga-horaria">
                            Carga horária diária
                            <input type="text" id="carga-horaria">
                        </label>
                    </div>
                </div>
            </section>

            <section id="section3">
                <div class="container-tabela">
                    <label for="ni">NI</label>
                    <input type="text">
                    <label for="">Docente</label>
                    <input type="text">


                </div>
                
                <div class="container-horarios">
                    <div class="container-carga-horaria-curso">
                        <label for="">DIAS DA SEMANA</label>
                        <section class="inputs">
                            <input type="date">
                          
                        </section>
                        
                    </div>
                    <div class="container-carga-horaria-diaria">
                        <label for="">HORÁRIOS DA SEMANA</label>
                        <section class="inputs">
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                            <div>
                                <input type="time">ás
                                <input type="time">
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            
            <section id="section4">
                <input type="submit" value="Cadastrar Turma">
                <div class="container-datas">
                    <div>
                        <label for="">Data inicial prevista
                            <input type="date">
                        </label>
                    </div>
                    <div>
                        <label for="">Data final prevista
                            <input type="date">
                        </label>
                    </div>
                </div>
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