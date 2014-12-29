<html>
    <head>
        <meta charset="UTF-8";
    </head>
    <body>
        
        <?php 
        
            include_once 'classes/Persona.php';
            include_once 'classes/CuentaBancaria.php';
            
            $p = new Persona(11222333, 'Juan', 'Perez', 1982);            
            $cb = new CuentaBancaria(1234,$p);
            $cb->depositar(5000);
            $cb->mostrar();
            $cb->extraer(200);
            $cb->mostrar();
            
            $cb2 = new CuentaBancaria(2567,new Persona(22234123, 'Maria Julia', 'Suarez', 1977),4000);
            $cb2->extraer(1500);
            echo $cb2->toString();
        ?>

    </body>
</html>

