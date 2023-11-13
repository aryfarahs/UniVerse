<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/javascript.js"></script>
    <title>UniVerse</title>
</head>
<body class="princ">
<?php
require_once 'funcoes.php';

?>
    <header>
        <img src="../images/logo.png" alt="">
        <h1>UNIVERSE</h1>
        <div class="perfil">
            <?php
            if(!($_SESSION['usuario'])){
                echo 'entrar';
            }else{

                echo "Olá, " . $_SESSION['nome'] . "   <abbr title='Perfil'><span class='material-symbols-outlined'>person</span></abbr>";
                echo '<br><br><p class="logout"><a href="login.php?logout=1">Sair</a></p>';
            }
            ?>
        </div>
    </header>

    <main>

        <div class="sideNav">
            <nav>
                <ul>
                    <a href="home.php"><li>&nbsp;HOME</li></a>
                    <a href="aulas.php"><li>&nbsp;MINHAS AULAS</li></a>
                    <a href="notas.php"><li>&nbsp;NOTAS/<br>&nbspFREQUÊNCIA</li></a>
                    <a href="atvComp.php"><li class="sideSelect">&nbsp;ATIVIDADES &nbsp;COMPLEMENTARES</li></a>
                    <a href="posFin.php"><li>&nbsp;POSIÇÃO &nbsp;FINANCEIRA</li></a>
                </ul>
            </nav>
        </div>

        <div class="compGraph"></div>
        <div class="incompGraph"></div>
        <h2 class="horas">72%</h2>

        <!-- MEUS -->
        <div class="containerATV pagina" id="idATVM">

            <div class="navATV">
                <nav>
                    <ul>
                        <a><li class="homeSelect">MINHAS ATIVIDADES</li></a>
                        <a onclick="some('idATVM'), showPage('idATVE')"><li>ENVIAR ATIVIDADE</li></a>
                        <a onclick="some('idATVM'), showPage('idATVD')"><li>DELETAR ATIVIDADE</li></a>
                    </ul>
                </nav>
            </div>

            <table class="atvBox">

                <thead>
                    <tr class="atvHeader">
                        <td><h4>ID</h4></td>
                        <td><h4>Nome</h4></td>
                        <td><h4>Grupo</h4></td>
                        <td><h4>Tipo</h4></td>
                        <td><h4>Horas</h4></td>
                        <td><h4>Posição</h4></td>
                    </tr>
                </thead>
                
                <tr class="atv">
                    <td>001</td>
                    <td>Ideathon</td>
                    <td>PUCPR</td>
                    <td>Workshop</td>
                    <td>5</td>
                    <td>Em Análise</td>
                </tr>

                <tr class="atv">
                    <td>002</td>
                    <td>Creche Feliz</td>
                    <td>Bom Guri</td>
                    <td>Workshop</td>
                    <td>5</td>
                    <td>Aprovado</td>
                </tr>
                
                <tr class="atv">
                    <td>003</td>
                    <td>Memória no Asilo</td>
                    <td>Viver Bem</td>
                    <td>Trabalho Voluntário</td>
                    <td>10</td>
                    <td>Em Análise</td>
                </tr>

                <tr class="atv">
                    <td>004</td>
                    <td>Coleta de Lixo</td>
                    <td>SLU</td>
                    <td>Trabalho Voluntário</td>
                    <td>10</td>
                    <td>Aprovado</td>
                </tr>

                <tr class="atv">
                    <td>005</td>
                    <td>AI: O Futuro?</td>
                    <td>PUCPR</td>
                    <td>Palestra</td>
                    <td>2</td>
                    <td>Aprovado</td>
                </tr>
                
                <tfoot>
                    <tr class="atvFooter">
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>

            </table>            

        </div>
        

        <!-- ENVIAR -->       
        <div class="subpagina containerATV" id="idATVE">

            <div class="navATV">
                <nav>
                    <ul>
                        <a onclick="showPage('idATVM')"><li>MINHAS ATIVIDADES</li></a>
                        <a><li class="homeSelect">ENVIAR ATIVIDADE</li></a>
                        <a onclick="showPage('idATVD')"><li>DELETAR ATIVIDADE</li></a>
                    </ul>
                </nav>
            </div>

            <form class="formFaculRides" action="">
                <div class="sem_nome">
                    <table class="atvBox">
                        <thead>
                            <tr class="atvHeader">
                                <td><h4>Nome</h4></td>
                                <td><h4>Descrição</h4></td>
                                <td><h4>Tipo</h4></td>
                                <td><h4>Horas</h4></td>
                                <td><h4></h4></td>
                            </tr>
                        </thead>
                        
                        <tr class="atv">
                            <!-- ID INT PRIMARY KEY AUTO INCREMENT -->
                            <td><input type="text" class="input_atv" required></td>
                            <td><input type="text" class="input_atv" required></td>
                            <td><input type="text" class="input_atv" required></td>
                            <td><input type="number" class="input_atv" required></td>
                        </tr>


                        <tfoot>
                            <tr class="atvFooter">
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>

                    <table class="atvBoxComp">
                        <thead>
                            <tr class="atvHeader">
                                <td><h4>Comprovante</h4></td>
                            </tr>
                        </thead>

                        <tr class="atv">
                            <td><input type="file" required></td>
                        </tr>

                        <tfoot>
                            <tr class="atvFooter">
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                    <input class="atvSubmit" type="submit" name="atvSub" id="idatvSub">
                
            </form>

        </div>


        <!-- DELETAR -->
        <div class="subpagina containerATV" id="idATVD">

            <div class="navATV">
                <nav>
                    <ul>
                        <a onclick="showPage('idATVM')"><li>MINHAS ATIVIDADES</li></a>
                        <a onclick="showPage('idATVE')"><li>ENVIAR ATIVIDADE</li></a>
                        <a><li class="homeSelect">DELETAR ATIVIDADE</li></a>
                    </ul>
                </nav>
            </div>

            <form class="formFaculRides" action="">
                <table class="atvBox">
                    <thead>
                        <tr class="atvHeader">
                            <td><h4>ID da Atividade</h4></td>
                            <td><h4>Motivo</h4></td>
                            <td><h4>Confirmar</h4></td>
                        </tr>
                    </thead>
                    
                    <tr class="atv">
                        <!-- ID INT PRIMARY KEY AUTO INCREMENT -->
                        <td><input type="text" class="input_atv" required></td>
                        <td><input type="number" class="input_atv" required></td>
                        <td><input type="checkbox" class="anex" required></td>
                    </tr>

                    <tfoot>
                        <tr class="atvFooter">
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>

                <input class="atvSubmit" type="submit" name="atvDel" id="idatvDel">
            </form>
        </div>
        


    </main>

    <footer >
        <p>Todos os direitos reservados e coisarada</p>
    </footer>
</body>
</html>