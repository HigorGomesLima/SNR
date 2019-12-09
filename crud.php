<?php

define("USER","admin");
define("HOST","localhost");
define("PASSWORD","123456");
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
?>