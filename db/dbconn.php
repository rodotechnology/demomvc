<?php
    /**
     * @version 092023
     * @author Ing. Rodrigo Ortiz, MIR
     * Clase que permite establecer la conexion con la base de datos
     */

    /*
        Para que el programa funcione requerimos obligatoriamente y de forma restricta que se incluya el archivo config.php
        https://www.w3schools.com/php/php_includes.asp
    */
    require_once 'config.php';

class BaseDatos
{
    // Declaración de una propiedad o atributos
    private $conexion; // Atributo que almacena la conexión al servidor
    private $db; // Atributo que almacena la conexión a la base de datos

    /**
     * Creamos un metodo estático que no necesita ser instanciado
     * @return mysqli conexion, Almacena la conexion a la base de datos para que pueda ser utilizada por
     * otros métodos
    */
    public static function conectar() {
        // Utilizando las constantes de conexion
        // mysqli_connect('servidor', 'usuario', 'contraseña', 'nombre de la BD', 'puerto');
        $conexion = mysqli_connect(HOST,USER,PASS,DBNAME,PORT);

        // Otra opción es por medio del arreglo asociativo
        // global $config; // Necesario para cargar la variable en ambito global
        // $conexion = mysqli_connect($config['host'],$config['user'],$config['pass'],$config['dbname'],$config['port']);

        // mysqli::$connect_errno -- mysqli_connect_errno — Devuelve el código de error de la última llamada
        // https://www.php.net/manual/es/mysqli.connect-errno.php
        if($conexion->connect_errno) //Evaluamos la conexion con el servidor
        {
            die('Lo sentimos, no se pudo conectar con MYSQL '.mysqli_error($conexion));
        }
        else{
            // https://www.php.net/manual/es/mysqli.select-db.php
            $db = mysqli_select_db($conexion, DBNAME); //Selecciona la base de datos por defecto para realizar las consultas
            if($db == 0){
                die('Lo sentimos, no se pudo conectar con la base de datos '. DBNAME);
            }
        }

        // Devolvemos la conexión para que pueda ser utilizada en otros métodos
        return $conexion;
    }

    /**
     * Método para cerrar la conexion
     * @param mysqli $conexion El método espera el parametro de la conexion que se desea cerrar
     */
    public static function desconectar($conexion){
        if($conexion) //Si existe una conexión
        {
            mysqli_close($conexion); // Cierra la conexión
        }
    }
}
?>
