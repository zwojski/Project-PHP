

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
                        <a href="/">Lista noatatek</a>
                    </li>
                    <li>
                        <a href="/?action=create">Nowa notatka</a> <!-- dodanie ? wskazuje na parametr -->
                    </li>
                   
                </ul>
            </div>

            <div>
                <h3> nowa notatka</h3>
                <?php echo htmlentities($action) ?>
            </div>
        </div>

        <div class="footer">

        </div>
    </body>
    
</html>