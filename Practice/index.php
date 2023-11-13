<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");

// error_reporting(0);
// ini_set('display_errors', '0'); nie wyświetla błędów na stronie

const DEAFULT_ACTION = 'list';

# super global $_GET
$action = $_GET['action'] ?? DEAFULT_ACTION;

$view = new View();

$viewParams = [];
if ($action === 'create') {
    $page = 'create';
    $viewParams['resaultCreate'] = 'udało się!';
} else {
    $page = 'list';
    $viewParams['resaultList'] = 'wyświetlamy notatki';
}

$view->render($action, $viewParams);
