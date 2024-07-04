<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

</head>

<body>

<h1>Tela de login</h1>

<form action="login.php" method="post">

<label for="email">Email:</label>
<input type="email" id="email" name="email" placeholder="Preencha com o seu email"><br><br>

<label for="senha">Senha:</label>
<input type="password" id="senha" name="senha" placeholder="Preencha com a sua senha"><br>

<ul>
    <li><a href="#">Esqueceu seu senha? Clique aqui para recuperação</a></li>
    <li><a href="Crud_Aluno/Formcad_Aluno.php">Não possui conta? Clique aqui para criar uma</a></li>
</ul>

<input type="submit" value="Realizar login">
</form>
    
</body>

</html>