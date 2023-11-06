<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="..\js\javascript.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    
</head>
<body>
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
        <!-- NAVEGAÇÃO LATERAL -->
        <div class="sideNav">
            <nav>
                <ul>
                    <a href="home.php"><li class="sideSelect">&nbsp;HOME</li></a>
                    <a href="aulas.php"><li>&nbsp;MINHAS AULAS</li></a>
                    <a href="notas.php"><li>&nbsp;NOTAS/<br>&nbspFREQUÊNCIA</li></a>
                    <a href="atvComp.php"><li>&nbsp;ATIVIDADES &nbsp;COMPLEMENTARES</li></a>
                    <a href="posFin.php"><li>&nbsp;POSIÇÃO &nbsp;FINANCEIRA</li></a>
                </ul>
            </nav>
        </div>




</body>
</html>