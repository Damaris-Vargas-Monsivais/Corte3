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
    //creamos json
    $json = '{"Pedro":35,"Benito":37,"Joel":43}';//paridad "nombre": valor
    //decodificamos a objeto
    $obj = json_decode($json);
    // utilzamos la notación de objetos ya conocida,
    // mostramos valores de propiedades,
    // cada nombre del json se convierte en propiedad.
    // Recuerda que tenemos la paridad 'nombre:valor' en json
    echo $obj->Pedro;
    echo '<br>';
    echo $obj->Benito;
    echo '<br>';
    echo $obj->Joel;
    ?>
</body>

</html>