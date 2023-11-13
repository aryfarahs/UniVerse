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
                    <a href="atvComp.php"><li>&nbsp;ATIVIDADES &nbsp;COMPLEMENTARES</li></a>
                    <a href="posFin.php"><li class="sideSelect">&nbsp;POSIÇÃO &nbsp;FINANCEIRA</li></a>
                </ul>
            </nav>
        </div>
        
        
        <div class="containerPOS" >

            <div class="semestre" onclick="revealTxt('sem2')">2º SEMESTRE</div>
            
            <!-- 2º SEMESTRE -->
            <div class="atvBox" id="sem2">

                <div class="atvHeader">
                    <h4>Data</h4>
                    <h4>Valor</h4>
                    <h4>Imprimir</h4>
                    <h4>Status</h4>
                </div>
                
                <div class="atv">
                    <p>06/12/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/11/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>

                <div class="atv">
                    <p>06/10/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/09/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                
                <div class="atv">
                    <p>06/08/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/07/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>

                <div class="atvFooter">
                </div>
            </div>
        

            <!-- PRIMEIRO SEMESTRE-->
            <div class="semestre" onclick="revealTxt('sem1')">1º SEMESTRE</div>

            <div class="atvBox" id="sem1">

                <div class="atvHeader">
                    <h4>Data</h4>
                    <h4>Valor</h4>
                    <h4>Imprimir</h4>
                    <h4>Status</h4>
                </div>
                
                <div class="atv">
                    <p>06/06/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/05/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>

                <div class="atv">
                    <p>06/04/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/03/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                
                <div class="atv">
                    <p>06/02/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                <div class="atv">
                    <p>06/01/2023</p>
                    <p>R$2.050,00</p>
                    <img src="../images/impressora.png" width="30px">
                    <p>Pago</p>
                </div>
                
                

                <div class="atvFooter">
                </div>

            </div>

        </div>

    </main>

    <footer >
        <p>Todos os direitos reservados e coisarada</p>
    </footer>
</body>
</html>