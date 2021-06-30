<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylos.css">
   

    <title>ACTIVIDAD2</title>
</head>
<style type="text/css">
   
</style>
<body>

        <?php
          
          $significados=array("Amarillo"=>"Prosperidad y riqueza","Verde"=>"paz y armonia","Rojo"=>"pasion y fuerza");
            //$significados["Amarillo"]//pros

          $personas=array(
            array("Andres Alzate","av.2n#34-16","3987654","16/05/1986","Rojo"),
            array("Carlos Rojas","carr.44#56-20","3945678","25/12/2010","Verde"),
            array("Eliecer Cardenas","Diag.23#13-34","3912345","31/01/1995","Amarillo"),
          );

       // $personas[0][3] //"16/05/1986",
        ?>

    <div class="jumbotron">
      <h1>ACTIVIDAD 2</h1>
    </div>

          <table style="width:50%">
           
         <thead>
             <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Cumpleaños</th>
                <th>Color favorito</th>
                <th>Significado</th>
            </tr>
         </thead>

           <?php
            foreach ($personas as $persona) {
                

            ?>
                <tr> 
                    <td>
                        <?php
                            echo($persona[0]);
                        ?>      
                    </td>
                    
                    <td>
                    <?php
                            echo($persona[1]);
                        ?>                     
                    </td>

                    <td>
                    <?php
                            echo($persona[2]);
                        ?> 
                    </td>

                    <td>
                    <?php
                            echo($persona[3]);
                        ?>                     
                    </td>

                    <td>
                    <?php
                            echo($persona[4]);
                        ?>                     
                    </td>

                    <td>
                    <?php
                        echo($significados[($persona[4])]);
                        
                        ?>                     
                    </td>
                    
                </tr> 
            <?php
            }
            ?>



          </table>

            </body>
</html>