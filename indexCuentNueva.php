<?php
    require_once("Persona.php");
    require_once("Cuenta.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Creando la persona...</p>
    <?php 
        $persona = new Persona('10000000','Pedro', 'Torres Sánchez',
                  26,'77777777', 'pedrotorres@hotmail.com');
    

    ?>
    <p>Creando la cuenta bancaria</p>
    <?php
        $cuenta = new Cuenta($persona, 0.05);
        $cuentaOtra = new Cuenta(
            new Persona("1", "Juan Carlos", "I", 88, '60000000',
             "juancarI@españa.org"), 0.01);
    ?>
</body>
</html>