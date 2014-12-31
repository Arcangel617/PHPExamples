<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/Laboratorio.php';
    
            $l1 = new Laboratorio('laboratorio1');
            echo $l1->mostrar();
            
            // ejemplo con dos parametros
            $l2 = new Laboratorio('laboratorio2','9 de julio 1234');
            echo $l2->mostrar();
            
            
            // ejemplo con tres paramatros
            $l3 = new Laboratorio('laboratiorio3','catamarca 4321',3794445566);
            echo $l3->mostrar();
            
        ?>   
    
</html>

