<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/Cliente.php';
    
            $c = new Cliente(34623055, 'Artigue', 'Arcángel Andrés', 450);
            
            echo $c->mostrar().'<br />';
            
            $c->nuevoSaldo(1000);
            
            echo $c->mostrar().'<br />';
            
            $c->agregaSaldo(500);
            
            echo $c->mostrar().'<br />';
            
            $c->agregaSaldo(95.56);
            
            echo $c->mostrar().'<br />';
            
        ?>   
    
</html>

