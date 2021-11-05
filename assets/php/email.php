<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $nome = addcslashes($_POST['nome'], "A..z");
        $email = addcslashes($_POST['email'], "A..z");
        $mensagem = addcslashes($_POST['mensagem'],  "A..z");
    }

    $to = "rodrigo_onesko@hotmail.com";
    $subject = "Contato fórmulario de contato";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Mensagem: ".$mensagem;

    $header = "From:rodrigo_onesko@hotmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo "email enviado com sucesso";
    } else {
        echo "O email não pode ser enviado";
    }


?>