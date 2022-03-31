<?php
    $user = "etecmcm";
    $pass = "141";

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(($usuario == $user) && ($senha == $pass)){
        header('location: painel/index.html');
        exit();
    }
    else{
        echo '
        <script type="index.html">
            alert("a senha está incorreta")            
        </script>'
    ;

    }

?>