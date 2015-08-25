<?php
session_start(); // starta a sessão 
session_destroy(); // destroi o q tem gravado
if(!isset($_SESSION['login']) && !$_SESSION['login']==true){ // se sessão logn não existir e login for diferente de true 
    // redireciona    para o login 
   header('Location:./controlador.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="recursos/css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            /*function setTopo(){
                $(window).scrollTop(0);
            }
                $(window).bind('scroll', setTopo);*/
        </script>
        <title>IFMadrugadão</title>
    </head>
<!--    <body>
        abre div fundo
        <div id="fundo" class="container-fluid">
            <div class="row">
                <br/>
                <br/>
            </div>-->
            