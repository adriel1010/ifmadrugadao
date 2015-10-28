<?php

include './conexao.php';
$nome = $_POST['nome_postagem'];


if(isset($_POST['btpost'])){
    header('Location:../painelAdm.php');
 }
if(isset($_POST['btexclui'])){
    header('Location:../excluirPostagem.php');
 }


 $pdoo= new Conexao();

// pega o metodo conectar que existe em conexão 
$pdo=$pdoo->conectar();

// seleciona na tabela login o usuario e senha q correspondem 
$excluir=$pdo->prepare("delete from postagem where nome_imagem=?");
// passagem de valores 

$excluir->bindValue(1, $nome);

// execução do metodo buscarusuario

$excluir->execute();
// se busca usuario retornar maior do q 0 ele starta a sessão e redireciona 

if($excluir->rowCount() >0){
    // starta a sessão e cria a sessão   login
echo "<script type='text/javascript'>";
echo "alert('Excluido com Sucesso !!!');";
echo "location.href='http://localhost/ifmadrugadao/index.php';";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "alert('Erro ao excluir a postagem. Tente novamente.');";
echo "location.href='http://localhost/ifmadrugadao/index.php';";
echo "</script>";
}



 ?>
