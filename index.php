<?php
/**
 * @version 092023
 * @author Ing. Rodrigo Ortiz, MIR
 * Archivo inicial del proyecto este recibe las peticiones del cliente cuando se consulta nuestra aplicación
 */

/*
    Información sobre la estructura de control requiere_once
    https://www.php.net/manual/es/function.require-once.php
*/

//Llamando el archivo de conexion a la base de datos
require_once 'db/dbconn.php';

//Llamando al archivo controlador, es aqui donde inicia el flujo de nuestra aplicación
require_once 'controllers/IntegranteController.php';

?>