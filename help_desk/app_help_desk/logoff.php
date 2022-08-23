<?php 
    // Encerrando a sessão
    session_destroy();
    header('Location: index.php');

    // É possível destruir apenas os índices da variável global $_SESSION, utilizando do comando unset(), seja:
    // unset($_SESSION[índice que deseja remover])
?>