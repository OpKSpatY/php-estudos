<?php 
class Conexao{
    private $host = 'localhost';
    private $user = 'root';
    private $db = 'php_pdo';
    private $password = '';

    public function connect(){
        try{
            $conection = new PDO(
                "mysql:host=$this->host;dbname=$this->db",
                "$this->user",
                "$this->password"
            )
            ;
            return $conection;
        }
        catch(PDOException $E){
            echo '<p> ' . $E->getMessage() . '</p>';
        }
    }
}
?>