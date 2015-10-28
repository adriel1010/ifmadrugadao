<?php
$nomeImagem =$_POST['nome_imagem'];
$url=$_POST['url'];
$descricao=$_POST['descricao'];
$categoria = $_POST['categoria'];

include './conexao.php';

$pdoo= new Conexao();

$pdo=$pdoo->conectar();

switch ($categoria){
     case "video" : 
$postar=$pdo->prepare("insert into postagem (nome_imagem,url,descricao,categoria) values (?,?,?,?);");
$postar->bindValue(1, $nomeImagem);
$postar->bindValue(2, $url);
$postar->bindValue(3, $descricao);
$postar->bindValue(4, "video");
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
}
switch ($categoria){
     case "imagem" : 
$postar=$pdo->prepare("insert into postagem (nome_imagem,url,descricao,categoria) values (?,?,?,?);");
$postar->bindValue(1, $nomeImagem);
$postar->bindValue(2, $url);
$postar->bindValue(3, $descricao);
$postar->bindValue(4, "imagem");
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
}

?>