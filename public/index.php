<?php
require_once '../app/controllers/SiteController.php';

$url = $_GET['url'] ?? 'index';

switch ($url) {
    case 'index':
        require '../app/views/site/index.php';
        break;
    case 'produto':
        require '../app/views/site/produto.php';
        break;
    case 'painel':
        require '../app/views/admin/painel.php';
        break;
    default:
        echo 'Página não encontrada';
}