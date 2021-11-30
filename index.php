<?php

/* echo "Hello world!"; */
/* var_dump($_SERVER ); */

/* var_dump($_SERVER); */

/* echo $_SERVER['REQUEST_METHOD']; */

echo "<style> body
{ 
height: 100%;
margin: 0;
background: linear-gradient(45deg, #000000, #000000);
font-family: sans-serif;
font-weight: 100;
} 
table { 
	
	width: 90%;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
	
	text-align: left;
   vertical-align: top;
   border: 0.1px solid #fff;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
   font-style: bold ;
    font-weight: bold; }
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   text-align: center;
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
} 
th {
	text-align: left;
}
  
  p{

    color: red;
    text-align: center;
    font-family:courier,arial,helvética;
    font-size = 1px;
  
  }

  h1{

    color: white;
    text-align: center;
    font-family:courier,arial,helvética;
    font-size = 1px;
    top: -50px;
  
  }
  
  span{
    color: red;
  }
  
  
 </style>" ;



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


echo "<br>";
echo "<br>";
echo "<h1> MARTÍNEZ LABRA MARÍA FERNANDA - 17200191 </h1>";
echo "<h1> RESULTADO DE LA PETICIÓN </h1>";

echo "<p> " . json_encode($registro) . "</p>";
