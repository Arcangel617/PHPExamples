<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
        
        <?php 
        
            include_once 'classes/Laboratorio.php';
            include_once 'classes/Producto.php';
            
            // se instancia un laboratorio
            
            $l = new Laboratorio('Bagó','9 de Julio 1489',3794112233);
            
            // instanciamos un producto
            
            $p = new Producto(1, 'Perfumería', 'Jabón Deluxe', 5.25, $l);
            
            // se asigna un stock de 1500 por una compra realizada
            
            $p->ajuste(1500);
            
            $p->mostrar();
            
            $p->ajuste(-200);
            $p->mostrar();
            
            // una consulta
            
            echo $p->mostrarLinea();
            
            
            
        ?>
        
    </body>
</html>

