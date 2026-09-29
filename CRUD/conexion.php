<?php
    /*Creacion de una funcion llamada conectar*/
    /*Funcion -> Bloque de codigo que podemos mandar a llamar cuando lo necesitemos*/

    function conectar() {
        /*Informacion del servidor*/
        $host = "localhost";
        $user = "root";
        $pass= "";
        /*Base de datos*/
        $bd = "aw_crud";
        /*Funcion de PHP que permite conectarse a MySQL*/
        $con = mysqli_connect($host, $user, $pass);
        /*Verifica si la conexion es correcta*/
        mysqli_select_db($con, $bd) or die("No se encuentra la base de datos");
        return $con;
    }
    ?>