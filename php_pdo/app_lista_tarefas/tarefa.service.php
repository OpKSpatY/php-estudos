<?php 
class TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa)
    {
        $this->conexao = $conexao->conect();
        $this->tarefa = $tarefa;
    }

    public function create(){
        $query = 'insert into tb_tarefas(tarefa) values(:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa')); // evita sql injections
        $stmt->execute();
    }

    public function read(){
        $query = '
            select 
                tf.id, s.status, tf.tarefa 
            from 
                tb_tarefas as tf
            left join tb_status as s on (tf.id_status = s.id)
        ';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // recupera os registros como um array de objetos
    }

    public function update(){
        $query = 'update tb_tarefas set tarefa = ? where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('tarefa')); // evita sql injections
        $stmt->bindValue(2, $this->tarefa->__get('id')); // evita sql injections
        return $stmt->execute();

    }

    public function delete(){

    }
}
?>