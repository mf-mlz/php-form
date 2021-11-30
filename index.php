<?php

/* echo "Hello world!"; */
/* var_dump($_SERVER ); */

/* var_dump($_SERVER); */

/* echo $_SERVER['REQUEST_METHOD']; */

$registro = [];

switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        break;

    case 'POST':
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        break;

    default:
        echo "El método HTTP no es reconocido";
        break;

}

array_push($registro, array('nombre' => $nombre, 'apellido' => $apellido));
echo json_encode($registro);
