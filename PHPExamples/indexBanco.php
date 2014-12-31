<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        
        <?php 
        
            include_once 'classes/Persona.php';
            include_once 'classes/CuentaCorriente.php';
            include_once 'classes/CajaDeAhorro.php';
            
            $p = new Persona(11222333, 'Silvia', 'Romero', 1982);            
            
            $ca = new CajaDeAhorro(1234,$p);            
            $cc = new CuentaCorriente(4321,$p);
            
            $cc->mostrar();
            $cc->depositar(5000);
            
            $cc->mostrar();           
            $cc->extraer(7000);
            
            
            $ca->mostrar();
            
        ?>

    </body>
</html>

