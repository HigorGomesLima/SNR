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
    <form action="listar.php" method="POST">
    <label>Nome Docente
    <input type='text' class="form-control" name='docente'></label>
    <label>Selecione a disciplina
    <select type='submit' class="custom-select" name='disciplina'>
            <option value='Artes'>Arte</option>
            <option value='Ciencias'>Ciências</option>
            <option value='Ed. Fisica'>Educação Física</option>
            <option value='Ens. Religioso'>Ensino Religioso</option>
            <option value='Espanhol'>Espanhol</option>
            <option value='Filosofia'>Filosofia</option>
            <option value='Geografia'>Geografia</option>
            <option value='Geometria'>Geometria</option>
            <option value='Historia'>História</option>
            <option value='Ingles'>Inglês</option>
            <option value='Portugues'>Língua Portuguesa</option>
            <option value='Leitura'>Leitura e Escrita</option>
            <option value='Matematica'>Matemática</option>
            <option value='Matemática Aplicada'>Matemática Aplicada</option>
            <option value='Redacao'>Redação</option>
            <option value='Robotica'>Robótica</option>
            <option value='Sociologia'>Sociologia</option>
        </select>
    </label>
    <label>Selecione a turma
    <select type='submit' name = "turma" class="custom-select" id="inputGroupSelect01">
        <option value="6-001">6º 1</option>
        <option value="6-002">6º 2</option>
        <option value="6-003">6º 3</option>
        <option value="6-004">6º 4</option>
        <option value="7-001">7º 1</option>
        <option value="7-002">7º 2</option>
        <option value="7-003">7º 3</option>
        <option value="7-004">7º 4</option>
        <option value="8-001">8º 1</option>
        <option value="8-002">8º 2</option>
        <option value="8-003">8º 3</option>
        <option value="8-004">8º 4</option>
        <option value="9-001">9º 1</option>
        <option value="9-002">9º 2</option>
        <option value="9-003">9º 3</option>
        <option value="9-004">9º 4</option>
        <option value="9-005">9º 5</option>
    </select>
    </label>
    <button class='btn btn-primary' type="submit">Carregar</button>
    </form>
    </main>
    <script src="js/jquery.js"></script>
</body>
</html>