<?php

include ('Conexao.php');

$nome = ($_POST['nome']);        
$mensagem = ($_POST['mensagem']);
$email = ($_POST['email']);
$endereco = ($_POST['endereco']);
$celular = ($_POST['celular']);

echo $nome."<br/>";
echo $mensagem."<br/>";
echo $email."<br/>";
echo $endereco."<br/>";
echo $celular."<br/>";

mysql_query("INSERT INTO formularioCliente(idFormularioCliente, nome, mensagem, email,endereco, celular) values(null, '$nome', '$mensagem', '$email','$endereco','$celular')");


?>