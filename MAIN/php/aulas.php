<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aulas.css">
    <title>UniVerse</title>
</head>
<body class="princ">
    <header>
        <img src="../images/logo.png" alt="">
        <h1>UNIVERSE</h1>
    </header>

    <main>
        <div class="sideNav">
            <nav>
                <ul>
                    <li><a href="home.php">&nbsp;HOME</a></li>
                    <li class="sideSelect"><a href="aulas.php">&nbsp;MINHAS AULAS</a></li>
                    <li><a href="notas.php">&nbsp;NOTAS/<br>&nbspFREQUÊNCIA</a></li>
                    <li><a href="atvComp.php">&nbsp;ATIVIDADES &nbsp;COMPLEMENTARES</a></li>
                    <li><a href="posFin.php">&nbsp;POSIÇÃO &nbsp;FINANCEIRA</a></li>
                </ul>
            </nav>
        </div>
        <div class="tabela-container">
            <h1>Aulas e carga horária</h1>
            <!-- <table id="tabela"></table>
            <script src="../js/notas.js"></script> -->
            <table id="tabela-aulas">
                <?php
                    echo "<tr>";
                        echo "<td>Matérias</td>";
                        echo "<td>Carga horária</td>";
                    echo "/<tr>";
                
                
                
                ?>





                <!-- <tr>
                    <td>Matérias</td>
                    <td>Carga horária</td>
                </tr> -->





            </table>
            <br>
            <script src="../js/notas.js"></script>
            <!-- <script src="../js/aulas.js"></script> -->
        </div>

    </main>

    <footer >
        <p>Todos os direitos reservados e coisarada</p>
    </footer>
</body>
</html>