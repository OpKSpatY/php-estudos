<?php 
    require './bibliotecas/lib1/lib1.php';
    require './bibliotecas/lib2/lib2.php';

    use B\Cliente as C1;
    use A\Cliente as C2;

    $c = new C1();
    print_r($c);
    echo $c->__get('nome');

    $c2 = new C2();
    print_r($c2);
    echo $c2->__get('nome');
?>