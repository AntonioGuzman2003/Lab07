<?php

function conectar() {
    $conexion = mysqli_connect('localhost','root','usbw','biblioteca');
    return $conexion;
}

function desconectar($conn) {
    mysqli_close($conn);
}

?>