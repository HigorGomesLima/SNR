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
        $disciplina = $_POST["disciplina"];
        $turma = $_POST["turma"];
        echo "<h3>{$disciplina}</h3>";
            get_turma_disciplina($turma,$disciplina,$docente);
    ?>
    </main>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>
</html>