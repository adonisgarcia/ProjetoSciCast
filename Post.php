<?php

include ('Conexao.php');

$nome = ($_POST['nome']);        
$mensagem = ($_POST['mensagem']);
$email = ($_POST['email']);
$idade = ($_POST['idade']);
$profissao = ($_POST['profissao']);
$cidade = ($_POST['cidade']);

echo $nome."<br/>";
echo $mensagem."<br/>";
echo $email."<br/>";
echo $idade."<br/>";
echo $profissao."<br/>";
echo $cidade."<br/>";

mysql_query("INSERT INTO formulario(idTifriend, nome, mensagem, email, idade, profissao, cidade) values(null, '$nome', '$mensagem', '$email','$idade','$profissao','$cidade')");

?>