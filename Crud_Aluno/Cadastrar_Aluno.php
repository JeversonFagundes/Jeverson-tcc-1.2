<?php

//conectar no banco de dodos. 
require_once "../conecta.php";

//variavel de conexão
$mysql = conectar();

//receber os dados vindos do formulário.
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//verrificar se o email vindo do formulário já está cadastrado em alguma das tabelas no banco de dados.



