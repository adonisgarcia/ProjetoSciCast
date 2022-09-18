<?php
    $nome =($_POST['nome']);
    $endereco = ($_POST['endereco']);
    $telefone = ($_POST['telefone']);
    $mensagem = ($_POST['mensagem']);
    
    $enviar = [$nome, $endereco,$telefone,$mensagem];
    
    if($nome != NULL){
        if($endereco != NULL){
            if($telefone != NULL){
                if($mensagem != NULL){
                    mysql_query("INSERT INTO formularios (idFormulario, nome, endereco, telefone, mensagem) values(null, '$nome', '$endereco','$telefone''$mensagem')");
                    
                    echo "<script type ='text/javascript'> alert('Sua mensagem foi enviada com sucesso.'); window.location.href='Interface.html';</script>";
                }
            }
        }
    }
    

?>
