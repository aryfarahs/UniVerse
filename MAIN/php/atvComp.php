<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/javascript.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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

            <div class="atvBox">

                <div class="atvHeader">
                    <h4>ID</h4>
                    <h4>Nome</h4>
                    <h4>Grupo</h4>
                    <h4>Tipo</h4>
                    <h4>Horas</h4>
                    <h4>Posição</h4>
                </div>
                
                <div class="atv">
                    <p>001</p>
                    <p>Ideathon</p>
                    <p>PUCPR</p>
                    <p>Workshop</p>
                    <p>5</p>
                    <p>Em Análise</p>
                </div>

                <div class="atv">
                    <p>002</p>
                    <p>Creche Feliz</p>
                    <p>Bom Guri</p>
                    <p>Workshop</p>
                    <p>5</p>
                    <p>Aprovado</p>
                </div>
                
                <div class="atv">
                    <p>003</p>
                    <p>Memória no Asilo</p>
                    <p>Viver Bem</p>
                    <p>Trabalho Voluntário</p>
                    <p>10</p>
                    <p>Em Análise</p>
                </div>

                <div class="atv">
                    <p>004</p>
                    <p>Coleta de Lixo</p>
                    <p>SLU</p>
                    <p>Trabalho Voluntário</p>
                    <p>10</p>
                    <p>Aprovado</p>
                </div>

                <div class="atv">
                    <p>005</p>
                    <p>AI: O Futuro?</p>
                    <p>PUCPR</p>
                    <p>Palestra</p>
                    <p>2</p>
                    <p>Aprovado</p>
                </div>
                
                <div class="atvFooter">
                </div>

            </div>            

        </div>
        

        <!-- ENVIAR -->       
        <div class="containerATV subpagina" id="idATVE">

            <div class="navATV">
                <nav>
                    <ul>
                        <a onclick="showPage('idATVM')"><li>MINHAS ATIVIDADES</li></a>
                        <a><li class="homeSelect">ENVIAR ATIVIDADE</li></a>
                        <a onclick="showPage('idATVD')"><li>DELETAR ATIVIDADE</li></a>
                    </ul>
                </nav>
            </div>

        </div>


        <!-- DELETAR -->
        <div class="containerATV subpagina" id="idATVD">

            <div class="navATV">
                <nav>
                    <ul>
                        <a onclick="showPage('idATVM')"><li>MINHAS ATIVIDADES</li></a>
                        <a onclick="showPage('idATVE')"><li>ENVIAR ATIVIDADE</li></a>
                        <a><li class="homeSelect">DELETAR ATIVIDADE</li></a>
                    </ul>
                </nav>
            </div>
        
        </div>
        


    </main>

    <footer >
        <p>Todos os direitos reservados e coisarada</p>
    </footer>
</body>
</html>