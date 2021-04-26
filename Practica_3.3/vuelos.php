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
//Este arreglo tiene la informacion a guardar en el archivo csv
$vuelos=array(
    array('id', 'Origen', 'Destino', 'Duracion'),
    array('1', 'New York', 'London', '415'),
    array('2', 'Shangai', 'Paris', '760'),
    array('3', 'Istambul', 'Tokyo', '700'),
    array('4', 'New York', 'Paris', '435'),
    array('5', 'Moscow', 'Paris', '245'),
    array('6', 'Lima', 'New York', '455'),
);

//Nombre del archivo en el servidor 
$nombreArch='vuelos2.csv';
//Abrimos el archivo en modo escritura
$archivo= fopen($nombreArch, 'w') or die ("No se puede abrir el archivo: $nombreArch");

//Recorriendo el arreglo 2D
foreach($vuelos as $vuelo)
{
    //Escribiendo cada registro (vuelo) en el archivo CSV
    $resp=fputcsv($archivo, $vuelo, ',', '"', '"');

    //Si el resultado de intentar escribir es estrictamente igual a false...
    if ($resp===false){die("Error al escribir en CSV");}
}//Fin-foreach

//Cerramos el archivo
fclose($archivo) or die ("No se puede cerrar el archivo: $nombreArch");

echo ("<h1>Revisa el archivo: $nombreArch</h1>");
?>    
</body>
</html>