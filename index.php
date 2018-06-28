<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
/*cARREGA 1 USUÁRIO
$root = new Usuario();
$root->loadById(2);
echo $root;*/

/*Carrega uma lista de Usuários
$lista = Usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose", "1234567890");
echo $usuario;*/
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("joao", "123654");

echo $usuario;

 ?>