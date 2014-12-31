<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/persona.php';
    
            $p = new Persona(34623055, 'Arcángel', 'Artigue', 1989);
    
            echo $p->mostrar();
        ?>   
    
</html>

