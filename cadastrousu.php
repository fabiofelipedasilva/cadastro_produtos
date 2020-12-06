<?php
if (isset)($_POST['email_cad']) && !empty($_POST['email_cad']);

$nome =addcslashes($_POST['name_cad']);
$email =addcslashes($_POST['email_cad']);
$telefone =addcslashes($_POST['tel_cad']);
$senha =addcslashes($_POST['senha_cad']);

$body = "name" .$nome. "\r\n".
        "email_cad" .$email. "\r\n".
        "tel_cad" .$telefone. "\n".
        "senha_cad" .$senha. "\n".

        if(cadastro($body)){

            echo("cadastrado com sucesso");
        }else{
        echo("não cadastrado");
        }


?>

