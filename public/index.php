<?php
require_once __DIR__ . '/../controllers/NotaController.php';

$rota = $_GET['rota'] ?? 'form';

$controller = new NotaController();

switch ($rota) {
    case 'salvar':
        $controller->salvar();
        break;

    case 'acessar':
        $codigo = $_GET['codigo'] ?? '';
        $controller->acessar($codigo);
        break;

    default:
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/form.php';
        include __DIR__ . '/../views/acessar.php';
        include __DIR__ . '/../views/footer.php';
}
