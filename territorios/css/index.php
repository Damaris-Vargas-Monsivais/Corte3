<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Territorios</title>
</head>

<body>
 <?php
 $nombreArchivo="territory_names2.csv";
 $archivo=fopen($nombreArchivo, "r")or die("No se puede abrir el archivo:$nombreArchivo");
 $datos=array();
 ?> 
<div class="container">
<h1 class="titulo">Territorios del Mundo</h1>
<table class="table">
       <!--diseño del encabezado de tabla-->
       <thead class="thead=dark">
       <!--encabezado-->
       <tr>
       <!--diseño del renglon de encabezado-->
       <th>Abrebiatura</th>
       <th>Nombre</th>
       <th>Nombre Oficial</th>
       <th>Nombre de Ciudadanos</th>
       </tr>
       </thead>
       </tbody>
       <?php
       while(($datos=fgetcsv($archivo, 0, ',', '*','*'))!== false)
       {
           print("<tr>");
           foreach($datos as $campo)
           {
               print("<td>");
               print("$campo");
               print("</td>");
           }
           print("</tr>");
       }
       fclose($archivo);
       ?>
       </tbody>
       </table><!--Termina tabla-->
</div>  
</body>
</html>