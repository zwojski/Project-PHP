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
                if ($page === 'create') {
                    include_once("templates/pages/create.php");
                } else {
                    include_once("templates/pages/list.php"); 
                }
                ?>
            </div>

        </div>

        <div class="footer">
            STOPKA
        </div>
    </body>
    
</html>