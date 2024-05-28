<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");

$request = [
'get' => $_GET,
'post' => $_POST
];

// $controller = new Controller($request);
// $controller->run();

(new Controller($request))->run();  // krótsz wersja lini 15 i 16; stwórz nowy obiekt na powstawie klasy Conroller i wywołaj na nim metodę run()