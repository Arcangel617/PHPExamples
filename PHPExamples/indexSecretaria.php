<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        
        <?php 
        
            include_once 'classes/Docente.php';
            include_once 'classes/Escuela.php';
            
            $d = new Docente('Vanessa Llanderal', 4500, 1000);            
            
            $e = new Escuela('Esc. Normal Dr. Juan Pujol', 'Bolivar 1148', 'Alicia Tutuy');
            $e->imprimirRecibo(new Docente('Arcangel Andres Artigue',5790,1500));
            
            $e2 = new Escuela('Instituto Superior Josefina Contte', 'Pelligrini 901', 'Graciela Tutuy');
            $e2->imprimirRecibo($d);
        ?>

    </body>
</html>

