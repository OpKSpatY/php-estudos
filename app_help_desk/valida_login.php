<?php 

    session_start(); // Inicia uma sessão para funcionar na proteção das páginas dentro do navegador
    print_r($_SESSION); // Variável criada ao iniciar-se uma sessão, retorna como um array

    $auth = false;
    $usuarios = [
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'usuario@teste.com.br', 'senha' => 'abcd')
    ];

    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
            $auth = true;
        }
    }

    if ($auth == true){
        echo 'Usuário autorizado!';
        $_SESSION['autenticado'] = true;
    }
    else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
    }


    /*
    $_GET;
    var_dump($_GET);
    echo $_GET['email'] . '<br>';
    echo $_GET['senha'] . '<br>';
    */

    echo '<pre>';
    print_r($usuarios);
    echo '</pre>';

    $_POST;
    var_dump($_POST);
    echo $_POST['email'] . '<br>';
    echo $_POST['senha'] . '<br>';
?>