<?php
    //pasta onde o arquivo var ser salvo
$_UP['pasta']='uload';
    // tamanho do arquivo em bytes
$_UP['tamanho']= 1024*1024*2;//2 MB

//Array com as extensões permitidas
$_UP['extensoes']=array('jpg','png','gif');

//Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia']=false;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0]='Não houve erro';

$_UP['erros'][1]='O arquivo no upload é maior do que o limite do PHP';

$_UP['erros'][2]='O arquivo ultrapassa o limite de tamanho especificado no HTML';

$_UP['erros'][3]='O upload do arquivo foi feito parcialmente';

$_UP['erros'][4]='Não foi feito o upload do arquivo';

//Verifica se houve alguma erro com o upload. Se sim, exibe a mensagem do erro
if($_FILES['arquivo']['error']!=0){
    die("Não foi possivel fazer o upload, erro:<br/>".$_UP['erros'][$_FILES['arquivo']['error']]);
            exit; //Para a execução do script
    
}

//Caso script cheque a esse ponto, não houve erro com o upload e o PHP pode continuar
//Faz a verificação da extensão da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if(array_search($extensao, $_UP['extensoes'])===false){
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
        }
//Faz a verificação do tamanho do arquivo
else if($_UP['tamanho']<$_FILES['arquivo']['size']){
    echo 'O arquivo enviado é muito grande, envie arquivos de até 2MB.';
}
else {
//Primeiro verifica se deve trocar o nome do arquivo
    if ($_UP['renomeia']==true){
        //cria um nome baseado no UNIX TIMESTAMP atual e cem extensão .jpg
        $nome_final = time().'.jpg';
    }  else {
        //verifica o nome original do arquivo
        $nome_final = $_FILES['arquivo']['name'];
        
    }
//Depois verifica se é possivel mover o arquivo para a pasta escolhida
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){
        //Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
        //echo "Upload efetuado com sucesso!";
        //echo'<br /><a href="' .$_UP['pasta'],.$nome_final.'">Clique aqui para acessar
    }  else {
        //Não for possivel fazer o upload, provavelmente a pasta está incorreta
        echo 'Não for possível enviar o arquivo, tente novamente';
        
    }
}
include './enviar.html'

?>
