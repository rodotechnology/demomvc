<?php
    /**
     * @version 092023
     * @author Ing. Rodrigo Ortiz
     * Archivo controladro de la información de los integrantes de la base de datos
     */

    /*
        Para que el programa funcione requerimos obligatoriamente y de forma restricta que se incluya el archivo IntegranteModel.php
        https://www.w3schools.com/php/php_includes.asp
    */
    require_once 'models/IntegranteModel.php';

    // Instancia del objeto integrantes
    $integrantes = new IntegranteModel();

    /*
        Llamando al método getIntegrantes(), el valor retornado lo asignamos a una variabble
        que ahora será el array asociativo devuelto por este método
    */
    $datos = $integrantes->getIntegrantes();

    // Llamando a la vista
    require_once 'views/integrantes_view.php';

?>