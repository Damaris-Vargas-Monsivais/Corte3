<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Mostrando vuelos json</title>
</head>

<body>
    <!-- Abrimos script para iniciar con la apertura del archivo json-->
    <?php
    //Sabemos que el archivo con los datos es vuelos.json
    $archivo = 'vuelos.json';
    //Verificamos si existe
    if (file_exists("$archivo")) 
    {
        //Tratamos de abrirlo
        $x = fopen($archivo, 'r')
            or die("Error: No se puede abrir el archivo json");
        //Recuerda que necesitamos el tamano del archivo
        $size = filesize($archivo);
        //Leemos el archivo como cualquier archivo de texto
        //Recuperamos todo el contenido
        $contenido = fread($x, $size);
        //Cerramos el archivo
        fclose($x);
        //AQUÍ RECONOCEMOS LOS DATOS JSON Y LOS CONVERTIMOS
        //LOS PASAMOS A UN ARREGLO Y OBTENDREMOS UNA LISTA DE DATOS
        $listaVuelos = json_decode($contenido, true);
        //Obtenemos el tamaño de la lista para poder recorrerla
        //NOTA:
        //Cada vuelo es un arreglo asociativo
        //por lo tanto la lista de vuelos es un arreglo de arreglos
        $numVuelos = count($listaVuelos);
    ?>
        <!-- Cerramos el script para continuar con código HTML puro-->
        <div class="container">
            <h1 class="titulo">Flights</h1>
            <div class="table-responsive">
                <table class="table">
                    <!-- Encabezado de tabla-->
                    <thead class="thead-dark">
                        <tr>
                            <!-- Diseño del renglon de encabezado-->
                            <th>Id</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <!-- Cuerpo de la tabla -->
                    <tbody>
                        <!-- Script que continúa para ir mostrando los vuelos en la página-->
                        <?php
                        for ($i = 0; $i < $numVuelos; $i++) {
                            echo '<tr>';
                            //Como dijimos antes cada vuelo es un arreglo asociativo
                            //por lo tanto tenemos una matriz o un areglo de arreglos
                            //recuerda la nomenclatura de un arreglo de arreglos es [][],
                            //con dos pares de corchetes uno seguido del otro
                            //así que recorremos cada elemento de Vuelo y cada
                            //uno de ellos tendrá id, origin, etc.
                            echo '<td>' . $listaVuelos[$i]['id'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['origin'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['destination'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['duration'] . '</td>';
                            echo '</tr>';
                        } //Fin for
                        ?>
                        <!-- Fin del script -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Script para poder cerrar el if que se abrió en el primer script -->
    <?php
    } //Cerramos el if que habíamos abierto en el script anterior
    ?>
    <!-- Continuamos el código HTML-->
</body>

</html>
