<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");

// if (!empty($_GET['action'])) {
//     $action = $_GET['action'];
// } else {
//     $action = null;
// }
$action = $_GET['action'] ?? null; // krótszy zapis if-a

$view = new View();
$view->render($action);

//dump($action);