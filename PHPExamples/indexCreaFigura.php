<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    
    <body>
        
        <?php 
        
            include_once 'classes/Punto.php';
            include_once 'classes/Circulo.php';
            include_once 'classes/Rectangulo.php';
            
            $c1 = new Circulo(rand(0, 100),new Punto());            
            $c1->desplazar(-240, -230);            
            $c1->caracteristicas();
            
            $p2 = new Punto(5.2,0.5);
            $c2 = new Circulo(rand(0,100),$p2);
            $c2->caracteristicas();
            
            echo "se muestra las carácteristicas del mayor de los circulos<br />";
            
            $c2->elMayor($c1)->caracteristicas();
            
            echo 'Distancia: '.round($c2->distanciaA($c1),2).'<br />';
            
            $r1 = new Rectangulo(rand(0, 100),  rand(0, 100));
            $r1->desplazar(40, -20);
            $r1->caracteristicas();
            
            $r2 = new Rectangulo(rand(0, 100),  rand(0, 100), new Punto(7.4,4.5));
            $r2->caracteristicas();
            
            echo "se muestra las carácteristicas del mayor de los circulos<br />";
            $r2->elMayor($r1)->caracteristicas();
            echo 'Distancia: '.$r2->distanciaA($r1);
            
        ?>
        
    </body>
</html>

