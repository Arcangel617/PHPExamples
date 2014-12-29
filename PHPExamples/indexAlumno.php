<html>
    <head>
        <meta charset="UTF-8" />
    </head>
        <?php 
            include_once 'classes/Alumno.php';
    
            $a1 = new Alumno(4001, 'Juan', 'Perez');
            $a1->mostrar();
            
            $a2 = new Alumno(4002, 'María', 'Gómez');
            $a2->setNota1(10);
            $a2->mostrar();
            
            
            $a3 = new Alumno(4003, 'José', 'González');
            $a3->setNota1(6);
            $a3->setNota2(7);
            $a3->mostrar();
            
            $a4 = new Alumno(4004, 'Laura', 'Medina');
            $a4->setNota1(10);
            $a4->setNota2(6);
            $a4->mostrar();
            
            $a5 = new Alumno(4005, 'Lucio', 'Dedek');
            $a5->setNota1(10);
            $a5->setNota2(4);
            $a5->mostrar();
            
            $a6 = new Alumno(4006, 'Gustavo', 'Esquivel');
            $a6->setNota1(7);
            $a6->setNota2(7);
            $a6->mostrar();
        ?>   
    
</html>

