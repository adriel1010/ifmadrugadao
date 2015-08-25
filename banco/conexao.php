<?php


class Conexao{

function conectar(){
    // faz a conexao   conexão com o banco ifmadrugadao
try{
$pdo = new PDO("mysql:host=localhost;dbname=ifmadrugadao","root","");
  // se der erro, mostra qual é o erro 
}  catch (PDOException $e){
    echo $e->getMessage();
  
}
return $pdo;
}

}




 /*  
  * 
  * conexão sem pdo 
  * 
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

//$usuario=$_GET['usuario'];
//$senha=$_GET['senha'];
$conexao = mysql_connect('localhost','root','');       // faz a conexão
 mysql_select_db('ifmadrugadao',$conexao);                  // passa o nome do banco
 $sql="select * from login where usuario='$usuario' and senha='$senha' ";
 $resultado = mysql_query($sql) or die ("Erro .:" . mysql_error());
  if(mysql_num_rows($resultado) > 0)
  header('Location:../painelAdm.php');
  else
 
 echo "<script type='text/javascript'>";
 echo "alert('Login ou senha incorretos. Tente novamente.');";
 echo "location.href='http://localhost/ifmadrugadao/controlador.php';";
 echo "</script>";
    */
  ?>