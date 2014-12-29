<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php 
        
            include_once 'classes/Docente.php';
            include_once 'classes/Escuela.php';
            
            $e = new Escuela('Esc. Normal Dr. Juan Pujol', 'Bolivar 1148', 'Alicia Tutuy');
            $e->imprimir(new Docente('Arcangel Andres Artigue',5790,1500));
        ?>

    </body>
</html>

