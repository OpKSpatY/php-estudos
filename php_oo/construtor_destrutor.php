<?php 
    class Pessoa{
        public $nome = null;
        public $numFilhos = null;

        function __construct($nome,$numFilhos)
        {
            $this->nome = $nome;
            $this->numFilhos = $numFilhos;
            echo "Objeto buildado<br>";
        }

        function __destruct()
        {
            echo "Objeto removido com sucesso!";
        }

        function __getName($name){
            return $this->$name;
        }

        function __getNumFilhos($numFilhos){
            return $this->$numFilhos;
        }

        function correr(){
            return $this->__getName('nome') . ' está correndo<br>';
        }
    }

    $x = new Pessoa("Pedro", 0);
    echo $x->correr();
    //unset($x) -> Remove o objeto da memória
?>