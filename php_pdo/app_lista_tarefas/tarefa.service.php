<?php 
class TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa)
    {
        $this->conexao = $conexao->connect();
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
        $query = 'delete from tb_tarefas where id = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $this->tarefa->__get('id'));
        return $stmt->execute();
    }

    public function checkMarked(){
        $query = 'update tb_tarefas set id_status = ? where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('id_status')); // evita sql injections
        $stmt->bindValue(2, $this->tarefa->__get('id')); // evita sql injections
        return $stmt->execute();

    }

    public function recuperarTarefasPendentes(){
        $query = '
            select 
                tf.id, s.status, tf.tarefa 
            from 
                tb_tarefas as tf
                left join tb_status as s on (tf.id_status = s.id)
            where
                tf.id_status = :id_status
        ';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // recupera os registros como um array de objetos
    }
}
?>