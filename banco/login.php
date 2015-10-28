<?php
// pega por metodo post o q foi passado por senha e usuario
$senha=$_POST['senha'];
$usuario=$_POST['usuario'];

// da um include na conexão, pegando o que tem na classe
include './conexao.php';

// estancia a classe conexão
$pdoo= new Conexao();

// pega o metodo conectar que existe em conexão 
$pdo=$pdoo->conectar();

// seleciona na tabela login o usuario e senha q correspondem 
$buscarusuario=$pdo->prepare("select * from login where usuario=? and senha=?");
// passagem de valores 

$buscarusuario->bindValue(1, $usuario);
$buscarusuario->bindValue(2, $senha);
// execução do metodo buscarusuario

$buscarusuario->execute();
// se busca usuario retornar maior do q 0 ele starta a sessão e redireciona 

if($buscarusuario->rowCount() >0){
    // starta a sessão e cria a sessão   login
    
session_start();
$_SESSION['login']= true;
// redireciona 
header('Location:../controlePainelAdm.php');
}else{
echo "<script type='text/javascript'>";
echo "alert('Login ou senha incorretos. Tente novamente.');";
echo "location.href='http://localhost/ifmadrugadao/controlador.php';";
echo "</script>";
}

?>