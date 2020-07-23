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
$divi->provincias = cargarArchivo::devolverXMLCostaRica();
//serializamos la informacion obtenida.
$data = $divi->__serialize();

//deserealizamos.
$diviDeserea = new division_total();

$diviDeserea->__unserialize($data);
//$x= json_encode($diviDeserea->__serialize());0
$x= json_encode(array('item'=>$diviDeserea->__serialize(),JSON_FORCE_OBJECT));
//$s=new distrito('asdf','sdds','dddddddddddd');
//$x= json_encode(array('item'=>$s->__serialize(),JSON_FORCE_OBJECT));
//$s=new distrito('a','b','c');
//echo json_encode($s->__serialize());
echo ($x);
