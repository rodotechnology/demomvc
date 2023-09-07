<?php
    /**
     * @version 092023
     * @author Ing. Rodrigo Ortiz
     * Clase que establece la comunicación entre la capa de modelo
     * y la base de datos
     */

class IntegranteModel
{
    // Atributos de clase
    private $db; // Almacena la conexion a  la BD
    private $integrantes; // Propiedad que almacena los resultados de la consulta a la BD

    /**
     * Método constructor de clase
     */
    public function __construct(){
        $this->db = BaseDatos::conectar(); // Almacenamos en db la llamada a la clase estática BaseDatos
        $this->integrantes = array(); // Le decimos que sea un array
    }

    /**
     * Este método nos va a retornar los valores obtenidos desde la tabla integrante
     * @return integrantes Propiedad que almacena los resultados de la consulta a la BD
     */
    public function getIntegrantes(){
        /* mysqli_query — Realiza una consulta a la base de datos
        https://www.php.net/manual/es/mysqli.query.php */
        $query = mysqli_query($this->db, 'select idIntegrante, nombre, carnet from integrante');

        if($query == false) //Si nos genera un error
        {
            echo "Sentencia incorrecta llamando a la tabla: integrante";
        }
        else{
            /*  Recorremos cada fila o registro obtenido desde la base de datos
                mysqli_fetch_assoc — Obtener una fila de resultado como un array asociativo
                https://www.php.net/manual/es/mysqli-result.fetch-assoc.php */
            while ($fila = mysqli_fetch_assoc($query)) {
                $this->integrantes[] = $fila;
            }
            /* mysqli_free_result — Libera la memoria asociada a un resultado
               https://www.php.net/manual/es/mysqli-result.free.php */
            mysqli_free_result($query);
        }

        // Cerramos la conexion a la base de datos
        $this->db = BaseDatos::desconectar($this->db);

        // Devolvemos el array que trataremos luego en la vista <-- IMPORTANTE!!!!!
        return $this->integrantes;
    }
}

?>