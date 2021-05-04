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
    $myXMLData=  //se crea un string y se le asigna un peuqeño documento XML
    "<?xml version='1.0' encoding='UTF-8'?>
    <document>
    <title>¿Cuarenta qué?</title>
    <from>Joe</from>
    <to>Jane</to>
    <body>
    Sé que esa es la respuesta, pero, ¿cuál es la pregunta?
    </body>
    </document>";
//aqui termina el string
    $xml=simplexml_load_string($myXMLData)
    or die("Error: Cannot create object");//se convierte el string

    print_r($xml);//se muestra el string en su formato original
    ?>
</body>
</html>