<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/Punto.php';
    
            $p1 = new Punto();
            echo $p1->coordenadas().'<br />';
            
                        
            $p2 = new Punto(3,4);
            $p2->mostrar();
            
            echo '<br />';
            
            $p1->desplazar(2, 2);
            echo $p1->coordenadas().'<br />';
            
            echo 'Distancia de '.$p1->coordenadas().' a '.$p2->coordenadas().'='.$p1->distanciaA($p2);
        ?>   
    
</html>

