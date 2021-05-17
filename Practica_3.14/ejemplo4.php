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
    //creamos json como ejemplo
    $json = '{"Pedro":35,"Benito":37,"Joel":43}';
    //usamos true para poder convertirlo en arreglo en vez de objeto
    $arr = json_decode($json, true);
    //utilzamos con la notación de arreglos ya conocida
    // mostramos los valores asociados
    // cada nombre del json se convierte en ubicación
    //recuerda que tenemos la paridad 'nombre:valor' en json
    echo $arr["Pedro"];
    echo '<br>';
    echo $arr["Benito"];
    echo '<br>';
    echo $arr["Joel"];
    ?>
</body>

</html>