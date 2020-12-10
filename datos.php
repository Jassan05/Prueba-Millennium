<?php

    $conexion=mysqli_connect('localhost', 'root', '', 'millennium');

    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];

    $sql="INSERT into usuarios(nombre, apellido) VALUES('$nombre', '$apellido')"; 
    echo mysqli_query($conexion, $sql);
    
?>


