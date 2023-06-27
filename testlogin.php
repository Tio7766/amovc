<?php
    // print_r($REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Usuário: ' . $usuario);
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha  = '$senha'";

        $result = $conexao->query($sql);
        
        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) <1)
        {
            header('Location: index.html');
        }

        else
        {
           header('Location: PagPrincipal.html');
        }

    }

    else
    {
        header('Location: index.html');
    }

    
?>