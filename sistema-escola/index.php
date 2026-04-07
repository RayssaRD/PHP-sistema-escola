<?php

require_once './Controller/EstudanteController.php';

$app = new EstudanteController();

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if($action === 'atualizar'){
     } else{
        $app->atualizarDados(); // salvar no banco de dados
     }
} else {

    switch ($action === 'novo') {
        case 'novo':
            require_once './View/cadastro.php'; //mostrar formulário
            break;
        case 'editar':
            $app->editar($id);
            break;
        case 'deletar':
            $app->editar($id);
            break;   
        default:
        $app->index();
        break;
    }
}
?>