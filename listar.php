<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Sistema de Notas</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
    <h1>Sistema de Notas</h1>
    <?php
        include "crud.php";

        $docente = $_POST["docente"];
        $disciplina = $_POST["disciplina"];
        $turma = $_POST["turma"];
        echo "<h3>{$disciplina}</h3>";
       /*$lista_alunos = [
["1013836","ANA JULIA CESAR LARA SILVA"]
,["966722","ANDREW AKIRYS FERNANDES DA SILVA"]
,["964539","BRENDA VITÓRIA SOUSA GUIMARÃES"]
,["982920","CARLOS EDUARDO FERREIRA DA SILVA"]
,["972469","CASSIANO FAQUIM RODRIGUES"]
,["973267","DANIELY CRISTINY SILVA MOREIRA"]
,["965414","DAVI GABRIEL GONCALVES FERNANDES"]
,["972758","DAVI PEREIRA CAMPOS MARQUES"]
,["972539","DOUGLAS SANTOS FORTUNA"]
,["978777","ENZO FONSECA COSTA"]
,["1036195","ENZO HENRIQUE NERES NASCIMENTO"]
,["987792","FELIPHE GABRIEL DE MELO FREITAS"]
,["965979","FRANCISCO AUGUSTO ROMERO DE ARAUJO"]
,["967599","GABRIEL BARBOSA BARRETO"]
,["988779","GABRIEL SIQUEIRA PADILHA"]
,["967916","HEITOR SANTOS AGUIAR"]
,["972840","HYAGO JOSE PEREIRA DA COSTA"]
,["966705","IAN SOUZA FORTUNA"]
,["968120","IGHOR DOS SANTOS SOUSA"]
,["967547","ISABEL CANDIDA BRAZ"]
,["973320","ISABELA APOLINARIO VIANA XAVIER"]
,["978771","ISAQUE COSTA ALMEIDA"]
,["973335","JOAO MANOEL MATIAS GOMES MOREIRA DOS SANTOS"]
,["967376","JOÃO PAULO RANGEL DOURADO DOS SANTOS"]
,["989707","JULIA GABRIELLE PIRES TAVARES"]
,["972699","KLEBER VICTOR SOUZA FELISBERTO"]
,["972207","LUCAS EDUARDO ALVES DE OLIVEIRA"]
,["967797","LUIZ EDUARDO DO VALE FILHO"]
,["963135","MARCOS VINICIOS BARBOSA SANTOS RAMOS"]
,["964525","MARIANA AGUIAR CHAVEIRO"]
,["973291","MARILLIA DA SILVA RABELO"]
,["963334","MATHEUS DE OLIVEIRA SILVA"]
,["973212","NATHAN LUIZ ALVES DE MELO"]
,["989152","PEDRO HENRIQUE SCAMARAL DE CARVALHO"]
,["967379","PEDRO LUCAS DE REZENDE ARAUJO"]
,["969369","RAFAEL RAHABANI LIMA"]
,["966847","RHAYANE ALVES PERES DE MORAES"]
,["968389","SAMUEL WERDEN ALVES MACHADO"]
,["969149","VICTOR SILVA SALES"]
,["963186","YASMIM CORTICO VIEIRA"]
];
            set_aluno('9',$lista_alunos);
            //set_nota_zero();*/
            get_turma_disciplina($turma,$disciplina,$docente);
    ?>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>
</html>