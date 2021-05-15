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
    //arreglo asociativo con edades
    $edades = array("Pedro" => 35, "Benito" => 37, "Joel" => 43);
    //convertimos arreglo asociativo en json
    $mijson = json_encode($edades);
    //mostrammos variable
    echo $mijson;
    ?>
</body>

</html>