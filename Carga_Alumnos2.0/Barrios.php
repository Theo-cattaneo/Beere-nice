<?php

    include "ipetym_
    
    conexion.php";



    $Query= " selec * from barrio";

    $resultado=mysqli_Query($conexion,$Query);

//El encabezado de la tabla
?>

    <table border=1>
        
        <tr style=\"border:1px solid gray\"bgcolor=\"#ff0000\">

            <td><b>Id barrio</b></td>
            <td><b>Barrio</b></td>
            <td><b>Zona</b></td>

        </tr>

<?php
    $bandera=0;
    while($Rs=mysqli_fetch_array($resultado))

        {
            if ($bandera==0)
                {

                    $bandera=1;
      
                    echo "<tr style=\"border:1px solid gray\"bgcolor=\"#d7d7ff\">".
                        "<td>".$Rs[0]."</td>".
                        "<td>".$Rs[1]."</td>".
                        "<td>".$Rs[2]."</td>".
                    "</tr>";
                }


            else

                {

                    $bandera=0;
                    echo "<tr style=\"border:1px solid gray\"bgcolor=\"#ff9393\">".
                        "<td>".$Rs[0]."</td>".
                        "<td>".$Rs[1]."</td>".
                        "<td>".$Rs[2]."</td>".
                    "</tr>";
         
               }
        }

?>

            </table>

<?php
    mysqli_close($conexion); //Cerramos la conexion

?>










    </table>
