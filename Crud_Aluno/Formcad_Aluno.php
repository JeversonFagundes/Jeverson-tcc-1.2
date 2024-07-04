<?php

//pasta de conexão com o banco de dados.
require_once "../conecta.php";

//variavel de conexão.
$mysql  = conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro de alunos</title>

</head>

<body>

    <h1>Formulário de cadastro de alunos</h1>

    <form action="Cadastrar_Aluno.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o seu nome"><br><br>

        <?php

        //Selecionar as informações do curso.
        $sql = "SELECT id_curso, nome_curso FROM curso ORDER BY nome_curso ASC";

        $resultado = excutarSQL($mysql, $sql);

        ?>

        <select name="curso">

            <option selected disabled value="">Escolha o curso</option>

            <?php

            while ($dados = mysqli_fetch_assoc($resultado)) {

            ?>
                <option value="<?php echo $dados['id_curso'] ?>">

                    <?php echo $dados['nome_curso'] ?>

                </option>
            <?php
            }
            ?>

        </select><br><br>

        <label for="matricula">Matricula: </label>
        <input type="text" name="matricula" id="matricula" placeholder="Digite a sua matricula"><br><br>

        <label for="email"> Email: </label>
        <input type="email" name="email" id="email" placeholder="Digite o seu email"><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite a sua senha"><br><br>

        <input type="submit" value="Cadastrar"><br>

        <p><a href="../logout.php">Voltar</a></p>

    </form>
</body>