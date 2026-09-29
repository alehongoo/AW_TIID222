<?php
    /* INCLUYE LA INFO DEL ARCHIVO conexion.php */
    include "conexion.php";
    /*Mandamos a llamar para ejecutar la funcion */ 
    $con = conectar();
    /*Dame todo lo que tengas en la tabla alumnos*/
    $sql = "SELECT * FROM alumnos";
    /* */
    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <table border="1">
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
        <tr>
    </table>
    
</body>
</html>