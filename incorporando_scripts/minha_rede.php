<?php 
    include("menu.php");
    include("menu2.php"); // Ao incluir uma página que não existe, gera um warning

    require("menu2.php"); // Ao requisitar uma página que não existe, gera um fatal error
?>

conteúdo da página(minha rede)