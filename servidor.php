<?php
//
//$a = $_POST['a'];
//$b = $_POST['b'];
//
include_once './modelo/division.php';
include_once './modelo/canton.php';
include_once './modelo/distrito.php';
include_once './modelo/provincia.php';
include_once './modelo/division_total.php';
include_once './cargarArchivo.php';

$divi = new division_total();

//cargamos informacion del archivo XML y lo devolvemos en formato array
//luego usando OOP y el metodo __serialize podemos serializar todo el objeto con 
//el arreglo de objetos y dentro de estos objetos con otros arrays de objetos
//y cada vez que se llame al metodo __serialize si estos metodos contienen una lista
//se llamara a cada lista para serializarlo de una manera correcta.

$divi->provincias = cargarArchivo::devolverXMLCostaRica();

//serializamos la informacion obtenida.
$data = $divi->__serialize();

$diviDeserea = new division_total();

//deserealizamos el objeto en base al anterior para demostrar
//el correcto funcionamiento.
$diviDeserea->__unserialize($data);

//enviamos los datos a la pagina para poder gestionar la aplicacion.
$x= json_encode(array('item'=>$diviDeserea->__serialize(),JSON_FORCE_OBJECT));
echo ($x);
