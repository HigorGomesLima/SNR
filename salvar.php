<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
            <div id="top">
                <img src="img/marca.png">
                <h2>ESCOLA SESI CAMPINAS</h2>
                <h4>PLANILHA DE NOTAS DE RECUPERAÇÃO</h4>
            </div>
        </header>
        <main>
    <?php
        include "crud.php";

        $docente = $_POST["docente"];
        foreach($_POST as $codigo=>$nota){
            if($codigo != 'docente'){
                mudar_nota($codigo,$nota,$docente);
            }
        }
        echo "<a>Salvo com sucesso!</a>";
        echo "<a href='index.php'>Voltar</a>";
    ?>
    </main>
    <script src="js/jquery.js"></script>
</body>
</html>