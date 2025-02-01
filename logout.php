<?php
// Inicie a sessão. Isso garante o acesso na sessão atual.
session_start();


// Limpe todas as variáveis de sessão. Isso redefine o array $_SESSION, efetivamente apagando todas as variáveis de sessão.//
$_SESSION = array();


// Se desejar destruir também o cookie de sessão. O código apaga o cookie de sessão, se estiver sendo usado. Isso é útil para garantir que a sessão realmente termine.//
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}


// Destroi a sessão no servidor
session_destroy();


/*MENSAGEM QUANDO SAI DO SISTEMA 
    echo "SAINDO...";*/


// Esse comando redireciona o usuário para a página de login ou qualquer outra página que ele deseja ir após o logout.
header("Location: index.php");

// O exit() é usado para garantir que nenhum código adicional seja executado após o redirecionamento.
exit();


/*
    <?php
        // ESSA LINHA SAI DO SISTEMA E VAI DIRETO PARA A INDEX DO SITE
        echo "<script> location.href = ('index.php') </script>";
    ?>
    */
?>