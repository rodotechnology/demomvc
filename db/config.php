<?php
    /**
     * @version 092023
     * @author Ing. Rodrigo Ortiz, MIR
     * Archivo que define los parametros que serán utilizados en la conexion a la BD
     */

    //Creamos constantes
    define('HOST', 'localhost'); //Definimos el host o servidor de nuestra base de datos MySql/MariaDB
    define('USER', 'prg4user'); //Nombre del usuario propietario de la base de datos
    define('PASS', 'ThePassword'); //Contraseña de conexión a la base de datos
    define('DBNAME', 'empresax'); //Nombre de la base de datos
    define('PORT', 3306); //Puerto donde escucha peticiones el servidor de MySQL/MariaDB

    //Creamos un arreglo asociativo
    // $config['host'] = 'localhost'; //Definimos el host o servidor de nuestra base de datos MySql/MariaDB
    // $config['user'] = 'prg4user'; //Nombre del usuario propietario de la base de datos
    // $config['pass'] = 'ThePassword'; //Contraseña de conexión a la base de datos
    // $config['dbname'] = 'empresax'; //Nombre de la base de datos
    // $config['port'] = '3306'; //Puerto donde escucha peticiones el servidor de MySQL/MariaDB
?>