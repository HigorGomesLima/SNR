<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Sistema de Notas</h1>
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
    <script src="js/jquery.js"></script>
</body>
</html>