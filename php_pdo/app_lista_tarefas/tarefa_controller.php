<?php 
    require '../app_lista_tarefas/tarefa.model.php';
    require '../app_lista_tarefas/tarefa.service.php';
    require '../app_lista_tarefas/conexao.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->create();

        header('Location: nova_tarefa.php?inclusao=1');
    }

    else if($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->read();
    }
    else if($acao == 'atualizar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefaService = new TarefaService($conexao, $tarefa);
        if($tarefaService->update()){
            if (isset($_GET['pag']) && $_GET['pag'] == 'index'){
                header('location: index.php');
            }else{
                header('location: todas_tarefas.php');
            }
        }
    }
    else if($acao == 'remover'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->delete();

        if (isset($_GET['pag']) && $_GET['pag'] == 'index'){
            header('location: index.php');
        }else{
            header('location: todas_tarefas.php');
        }
    }
    else if($acao == 'checkItem'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->checkMarked();

        if (isset($_GET['pag']) && $_GET['pag'] == 'index'){
            header('location: index.php');
        }else{
            header('location: todas_tarefas.php');
        }
    }
    else if($acao == 'recuperarTarefasPendentes'){
        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1 );

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperarTarefasPendentes(); 


    }
?>