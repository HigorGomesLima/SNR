<?php

header('Content-Type: text/html; charset=utf-8');
set_time_limit(300);
define("USER","root");
define("HOST","localhost");
define("PASSWORD","");
define("DB","snr");

function get_lista($turma,$discipina){
    $sql_query = "SELECT FROM ";
}
function set_aluno($turma,$lista){
    $con = mysqli_connect(HOST,USER,PASSWORD,DB);
    foreach($lista as $value){
        $sql = "INSERT INTO `aluno` (`codigo`, `matricula`, `turma`, `nome`) VALUES (NULL, '{$value[0]}', '{$turma}', '{$value[1]}');";
        if(mysqli_query($con,$sql)) {
            echo "Sucesso";
        }else{
            echo "Erro";
        }
    }
}
function set_zero(){
    $con = mysqli_connect(HOST,USER,PASSWORD,DB);
    $sql = "SELECT * FROM aluno";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $aluno = $row["codigo"];
            echo $aluno . "<br>";
            for($i = 1;$i < 5;$i++){
                $n_sql = "INSERT INTO `bimestre` (`codigo`,`nome`,`aluno`) VALUES (NULL, '{$i}','{$aluno}')";
                if(mysqli_query($con,$n_sql)){
                    echo "sucesso <br>";
                }else{
                    echo "erro <br>" . mysqli_error($con);
                }
            }
        }
    } 
}
function set_nota_zero(){
    $con = mysqli_connect(HOST,USER,PASSWORD,DB);
    $sql = "SELECT * FROM bimestre";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $bimestre = $row["codigo"];
            echo $bimestre . "<br>";
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Portugues',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Matematica',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Geografia',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Historia',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Ciencias',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Ed. Fisica',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Ens. Religioso',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Ingles',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Leitura',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Espanhol',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Artes',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Redacao',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Mat. Aplicada',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Filosofia',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Geometria',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Robotica',NULL,NULL)";
            mysqli_query($con,$n_sql);
            $n_sql = "INSERT INTO `nota` (`codigo`,`bimestre`,`disciplina`,`docente`,`nota`) VALUES (NULL, '{$bimestre}','Sociologia',NULL,NULL)";
            mysqli_query($con,$n_sql);
        }
    } 
}

function get_turma_disciplina($n_turma,$n_disciplina,$n_docente){
    $con = mysqli_connect(HOST,USER,PASSWORD,DB);
    mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    $sql = "SELECT aluno.* FROM aluno
    INNER JOIN turma ON aluno.turma = turma.codigo
    WHERE turma.nome = '{$n_turma}'";
    $result = $con->query($sql);
    echo "<form action='salvar.php' method='POST'>
    <label>Nome Docente<input type='text' name='docente' value='{$n_docente}' required></label>";
    if($result->num_rows > 0){
        echo "<table class='table table-striped'> <thead class='thead-dark'> <th>Matrícula</th><th>Nome</th><th>1º Bimestre</th><th>2º Bimestre</th>
        <th>3º Bimestre</th><th>4º Bimestre</th></thead>
        <tbody>";
        while($row = $result->fetch_assoc()){
            $m_aluno = $row["matricula"];
            $c_aluno = $row["codigo"];
            $n_aluno = $row["nome"];
            $n_sql = "SELECT nota.* FROM nota
            INNER JOIN bimestre ON nota.bimestre = bimestre.codigo
            INNER JOIN aluno ON bimestre.aluno = aluno.codigo
            WHERE nota.disciplina = '{$n_disciplina}' AND aluno.codigo = '{$c_aluno}'";
            echo "<tr><td>{$m_aluno}</td><td>{$n_aluno}</td>";
            $result2 = $con->query($n_sql);
            while($row2 = $result2->fetch_assoc()){
                $c_nota = $row2["codigo"];
                $n_nota = $row2["nota"];
                $d_nota = $row2["docente"];
                if($n_nota){
                    echo "<td data-toggle='tooltip' title='{$n_docente}'>
                    <input class='form-control input_nota' type='text'
                    name='{$c_nota}' value='{$n_nota}'></td>";
                }else{
                    echo "<td>
                    <input class='form-control input_nota' type='text' 
                    name='{$c_nota}' value='0'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
    echo "<button class='btn btn-primary' type='submit'>Salvar</button></form>";
}

function mudar_nota($codigo,$nota,$docente){
    $con = mysqli_connect(HOST,USER,PASSWORD,DB);
    mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    $s_sql = "SELECT * FROM `nota` WHERE `codigo` = '{$codigo}'";
    $result = $con->query($s_sql);
    if($aux = $result->fetch_assoc()){
        $nota_antiga = $aux["nota"];
    }
    if($nota_antiga != $nota){
            $sql = "UPDATE `nota` SET `nota`='{$nota}',`docente`='{$docente}' WHERE `codigo`='{$codigo}'";
        if(!mysqli_query($con,$sql)){
            echo "erro". mysqli_error($con);
        }
    }
}
?>