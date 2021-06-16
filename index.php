<?php

require_once("config.php");

###############################################################################################################
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


###############################################################################################################
// CARREGA UM USUÁRIO PELO ID
// $usuario = new Usuario();
// $usuario->loadById(3);
// echo $usuario;


###############################################################################################################
// CAREREGA UMA LISTA DE USUÁRIOS
// $lista = Usuario::getList();
// echo json_encode($lista);


###############################################################################################################
// CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("jo");
// echo json_encode($search);

###############################################################################################################
// CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
// $usuario = new Usuario();
// $usuario->login("root", "!@#123saa21");
//echo $usuario;


###############################################################################################################

// CRIANDO UM NOVO USUÁRIO SEM PARAMETROS
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@luno");


// CRIANDO UM NOVO USUÁRIO PASSANDO PARAMETROS
// $aluno = new Usuario("Marcos", "mar123!#4");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();
$usuario->loadById(7);

$usuario->update("André", "!#@#$!@13412");

echo $usuario;

?>