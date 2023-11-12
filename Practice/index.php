<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");

const DEAFULT_ACTION = 'list';

# super global $_GET
$action = $_GET['action'] ?? DEAFULT_ACTION;

$view = new View();

$viewParams = [];
if ($action === 'create') {
    $page = 'create';
    $viewParams['resaultCreate'] = 'udało się!';
} else if ($action === 'list') {
    $page = 'list';
    $viewParams['resaultList'] = 'wyświetlamy notatki';
}

$view->render($action, $viewParams);
