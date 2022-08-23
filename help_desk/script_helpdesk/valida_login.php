<?php 

    session_start(); // Inicia uma sessão para funcionar na proteção das páginas dentro do navegador
    //print_r($_SESSION); // Variável criada ao iniciar-se uma sessão, retorna como um array

    $auth = false;
    $usuario_id = null;
    $usr_prof_id = null;

    $tipo_perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    $usuarios = [
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'usuario@teste.com.br', 'senha' => '123456' ,'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456' ,'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456' ,'perfil_id' => 2)
    ];

    foreach($usuarios as $user){
        
        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
            $auth = true;
            $usuario_id = $user['id'];
            $usr_prof_id = $user['perfil_id'];
            print_r($user);
        }
    }

    if ($auth == true){
        //echo 'Usuário autorizado!';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usr_prof_id;
        
        header('Location: home.php');
        
    }
    else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


    /*
    $_GET;
    var_dump($_GET);
    echo $_GET['email'] . '<br>';
    echo $_GET['senha'] . '<br>';
    */
    /*
    $_POST;
    var_dump($_POST);
    echo $_POST['email'] . '<br>';
    echo $_POST['senha'] . '<br>';
    */
?>