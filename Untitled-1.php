<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylos.css">
    


    <title>ACTIVIDAD2</title>
</head>
<body>
    <div class="jumbotron">
      <h1>ACTIVIDAD 2</h1>
    </div>

        <?php
          
          $significado=array("Amarillo"=>"Prosperidad y riqueza","Verde"=>"paz y armonia","Rojo"=>"pasion y fuerza");

          $persona=array(
            array("Andres Alzate","av.2n#34-16","3987654","16/05/1986","Rojo"),
            array("Carlos Rojas","carr.44#56-20","3945678","25/12/2010","Verde"),
            array("Eliecer Cardenas","Diag.23#13-34","3912345","31/01/1995","Amarillo"),
          );
        ?>
    
    <table border="3">
      <tr>
        <td><b>Nombre</b></td>
        <td><b>Direccion</b></td>
        <td><b>Telefono</b></td>
        <td><b>Cumpleaños</b></td>
        <td><b>Color favorito</b></td>
        <td><b>Significado</b></td>
      </tr>
      <tbody>
        <?php
        foreach ($persona as $patin) {
        ?>
        <tr>
          <?php

            foreach ($patin as $registro) {
                echo"<td>$registro<td/>";
             }
          
          $resultado="";
          foreach ($significado as $nombre_significado=>$valor) {

           if($registro==$nombre_significado)
           {
             $resultado=$valor;             
           }
           if($resultado=="")
           {
             $resultado="No hay recomendación";
           }
          }
        }
              echo"<td>$resultado</td>";
              echo"</tr>"
          
          ?>
      </tbody>
    </table>



</body>
        </html>