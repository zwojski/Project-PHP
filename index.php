<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");

// if (!empty($_GET['action'])) {
//     $action = $_GET['action'];
// } else {
//     $action = null;
// }
$action = $_GET['action'] ?? null; // krótszy zapis if-a


// logika odpowiedzialna za wyświetlenie widoku
if ($action === 'create') {
    include_once("templates/pages/create.php");
} else {
    include_once("templates/pages/list.php"); 
} 