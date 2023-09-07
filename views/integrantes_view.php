<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes</title>
</head>
<body>
    <?php
        /**
         * Capa de la vista, area que interactua con el cliente (usuario final)
         * @version 092023
         * @author Ing. Rodrigo Ortiz, MIR
         */

        // Creamos una variable tabla y la inicializamos con las etiquetas de apertura de la tabla y creamos la primera fila
        $tabla = "<table><tr><th>Código</th><th>Integrante</th><th>Carnet</th></tr>";

        foreach($datos as $dato) // Recorremos cada elemento del array asociativo y generamos un nuevo objeto $dato
        {
            // Por cada elemento (llave, valor) del arreglo creamos una nueva fila de la tabla
            $tabla .= "<tr><td>" . $dato['idIntegrante']. "</td><td>" . $dato['nombre']. "</td><td>" . $dato['carnet'] . "</td></tr>";
        }

        // Cerramos las etiquetas de la tabla
        $tabla .= "</table>";

        // Generamos el html por medio del echo
        echo $tabla;
    ?>
</body>
</html>


