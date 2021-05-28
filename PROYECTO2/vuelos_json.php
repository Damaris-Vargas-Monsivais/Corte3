<?php
//Requerimos llamar al archivo que tiene la clase
//Vuelo para poder usarla
require_once('./ClassVuelo.php');
//Definimos el nombre del archivo para el JSON
$vuelos_json = "vuelos.json";
//Para simular que los vuelos vienen de algun lado
//creamos 6 objetos de la clase 'Vuelo', vuelo1, vuelo2, etc
//esta vez no los capturamos desde formulario
$vuelo1 = new Vuelo(
    "1",
    "New York",
    "London",
    "415",
);
// inventamos otro vuelo
$vuelo2 = new Vuelo(
    "2",
    "Shanghai",
    "Paris",
    "760",
);
// inventamos otro vuelo
$vuelo3 = new Vuelo(
    "3",
    "Istanbul",
    "Tokyo",
    "700",
);
// inventamos otro vuelo
$vuelo4 = new Vuelo(
    "4",
    "New York",
    "Paris",
    "435",
);
// inventamos otro vuelo
$vuelo5 = new Vuelo(
    "5",
    "Moscow",
    "Paris",
    "245",
);
// inventamos otro vuelo
$vuelo6 = new Vuelo(
    "6",
    "Lima",
    "New York",
    "455",
);
//preparamos un arreglo para los vuelos
$vuelos = array();
//agregamos el primer vuelo
$vuelos[] = $vuelo1;
//agregamos el segundo vuelo
$vuelos[] = $vuelo2;
//agregamos el tercero vuelo
$vuelos[] = $vuelo3;
//agregamos el cuarto vuelo
$vuelos[] = $vuelo4;
//agregamos el quinto vuelo
$vuelos[] = $vuelo5;
//agregamos el sexto vuelo
$vuelos[] = $vuelo6;
//En ejercicios anteriores los creabamos a partir de simples strings
//Ahora creamos el json a partir de los objetos (es más limpio el código)
$json_string = json_encode($vuelos);
//Pasamos el string en formato json a un archivo
//es decir escribiremos en un archivo común
//como en la primera unidad
//creamos un archivo en modo 'w'
$arch = fopen($vuelos_json, 'w');
if ($arch == false) {
    echo ("Error al abrir el archivo");
    exit();
}
//Escribimos en el archivo el string que contiene el json
fwrite($arch, $json_string);
//Cerramos el archivo como se debe
fclose($arch);
//Mostramos mensaje de que se escribieron los datos
echo '<h3>Datos escritos en vuelos.json </h3>';
//Redirigimos para mostrar resultados desde el archivo creado
header("refresh:2;url=mostrar_json.php");
