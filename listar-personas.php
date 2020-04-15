<?php
    include "conexion.php";
    $consulta = "SELECT * FROM registro";
    $resultado = mysqli_query($conexion , $consulta);

    $json = array();
    while ($fila = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'nombre' => $fila['nombre'],
            'apellido' => $fila['apellido'],
            'telefono' => $fila['telefono']
        );
       
    }

    $json_string = json_encode($json);
    echo $json_string;
?>