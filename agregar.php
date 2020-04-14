<?php
$resultado = [];
$error = "";

require_once('conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];


$consulta = "insert into registro(nombre,apellido,telefono)
             values('$nombre','$apellido','$telefono')";

             mysqli_query($conexion, $consulta);
            

             if (mysqli_error($conexion) == "") {
                $resultado["error"] = false;
                $resultado["mensaje"] = "Datos agregados con éxito.";
            } else {
                $resultado["error"] = true;
                $resultado["mensaje"] =  mysqli_error($conexion);
            }
            // json_encode convierte el arreglo en formato JSON
            echo json_encode($resultado);

?>