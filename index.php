<?php
    require_once("clases/Persona.php");
    require_once("clases/Empleado.php");
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Gestion de clientes y empleados</h1>

    <?php
        $david = new Persona("3000000", "David","jimenez lópez",
            24);
        echo "<p>La persona creada es </p>";
        echo "<table>";
        echo $david;
        echo "</table>";

        $emp1 = new Empleado("4444444", "Ana", "Lopez Jiménez", 35, 
                  "6555555", "analjim@gmail.com", "gerente", 4800);
        
        
        echo "<p>El empleado es</p> ";    
        echo "<table>";
        echo $emp1;
        echo "</table>";
        

        echo "<p>La Persona es</p> ";    
         echo "<table>";
        echo $david;
         echo "</table>";

        if ($emp1->esMayorDeEdad()) {
            echo $emp1->getNombre()." es mayor de edad";
        } else {
            echo "{$emp1->getNombre()} NO es mayor de edad";
        }


    ?>

</body>
</html>