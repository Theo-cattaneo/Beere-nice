<?php

    include "ipetym_conexion.php";

    $Buscar=$_POST["Texto"];
    $Por=$_POST["Opciones"];
    switch ($Por) {
        case "Nombre":
            
            $Query="selec * from alumnos where Nombre_Alumnos like '%$Buscar%' 
            ORDER BY Nombre_alumnos ASC";
            break;

        case "Apellido":
            $Query="selec * from alumnos where Apellido_Alumnos like '%$Buscar%' 
            ORDER BY Apellido_alumnos ASC";
            break;

        case "DNI":
            $Query="selec * from alumnos where Documento_Alumnos like '%$Buscar%' 
            ORDER BY Documento_Alumnos ASC";
            break;

        default:

            echo "Datos no validos"

        

    }

$Resultado=mysqli_Query($Conexion,$Query);

while ($registro = mysqli_fetch_array($Resultado)) {
    echo $registro [0];
    echo "-";
    echo $registro [1];
    echo "-";
    echo $registro [2];
    echo "<br>";

}
echo "<br>";

mysqli_close ($Conexion);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     oñññ
?>