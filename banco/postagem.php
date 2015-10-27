<?php
$url=$_POST['url'];
$descricao=$_POST['descricao'];

include './conexao.php';

$pdoo= new Conexao();

$pdo=$pdoo->conectar();

$postar=$pdo->prepare("insert into postagem (url,descricao) values (?,?);");

$postar->bindValue(1, $url);
$postar->bindValue(2, $descricao);

$postar->execute();

if($postar->rowCount() >0){
echo "<script type='text/javascript'>";
echo "alert('Postagem realizada com sucesso !!!');";
echo "location.href='http://localhost/ifmadrugadao/index.php';";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "alert('Erro ao postar Por favor tente novamente !!!');";
echo "</script>";
}




?>