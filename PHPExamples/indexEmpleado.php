<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/Empleado.php';
    
            $e1 = new Empleado(20112223331, 'Perez', 'Juan', 4500, 2013);
            $e1->mostrar();
            
            $e2 = new Empleado(20223334443, 'García', 'Romina', 7000, 2005);
            echo $e2->mostrarLinea().'<br>';
            
            $e3 = new Empleado(20334445555, 'Coutinho', 'Manuel', 10000, 2001);
            $e3->mostrar();
        ?>   
    
</html>

