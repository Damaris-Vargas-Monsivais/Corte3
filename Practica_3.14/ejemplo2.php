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
    //Almacenando datos JSON en una variable PHP
    // nota que el string tiene forma de json
    $miJson = '{"Pedro":35,"Benito":37,"Joel":43}';//paridad "nombre": valor
    //decodificamos el json, convertimos a objeto PHP
    // usamoa ahora assoc = true para convertir el json
    //en arreglo asociativo en vez de objeto estandar
    $obj = json_decode($miJson, true);//"true" para arreglo asociativo
    //mostramos contenido del objeto
    var_dump($obj);
    ?>
</body>

</html>