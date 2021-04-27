<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $nombreArchivo="territory_names.csv";

 $archivo=fopen($nombreArchivo,"r") or die ("No se puede abrir el archivo: $nombreArchivo");;

 $datos=array();

 //imprimimos la etiqueta para empezar una tabla
 print("<table>");

 //recorramos el archivo csv registro por registro
 while(($datos=fgetcsv($archivo, 0, ',', '"', '"'))!==False)
 {
     //imprimamos el inicio del renglon de la tabla tr
     print("<tr>");

     //como ya tenemos el primer registro y ese registro es una lista
     //recorramos dicha lista, campo por campo
     foreach($datos as $campo)
     {
        //imprimamos la etiqueta para el dato de tabla td
        print("<td>");
        //imprimimos el dato: campo
        print("$campo");
        //imprimamos el cierre de </td>
        print("</td>");
     }
     //imprimamos el cierre del registro de tabla </tr>
     print("</tr>");
 }
 //imprimamos el cierre de la tabla
 print("</table>");
 ?>   
</body>
</html>