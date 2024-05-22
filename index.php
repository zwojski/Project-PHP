<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}


?>

<html>

    <head>
    </head>

    <body>
        <div class="heder">
            <h1>Moje notatki</h1>
        </div>
        
        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/">Lista notatek</a>
                    </li>
                    <li>
                        <a href="/?action=create">Nowa notatka</a> <!-- dodanie ? wskazuje na parametr -->
                    </li>
                   
                </ul>
            </div>

            <div>
                <?php
                // if($action === 'create'):
                //     echo 'nowa notatka';
                // else :
                //     echo 'list noatek';
                // endif;               
                ?>
                <?php if ($action === 'create') : ?>
                   <h3> nowa notatka</h3>
                <?php else : ?>
                    <h4>lista notatek</h4>
                <?php endif; ?>
            </div>

        </div>

        <div class="footer">

        </div>
    </body>
    
</html>

