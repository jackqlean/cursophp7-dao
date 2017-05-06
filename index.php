<?php
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário
//$jose = new Usuario();

//$jose->loadbyId(4);

//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ja");

//echo json_encode($search);

//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("JAQUISON", "masterkey");

//echo $usuario;

//Inserindo novos usuários
/*

$aluno = new Usuario("aluno","pass1234");

$aluno->insert();

echo $aluno;
*/


//Alterar um usuário
/*$usuario = new Usuario();

$usuario->loadbyId(7);
$usuario->update("professor","passw331");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();

echo $usuario;


?>