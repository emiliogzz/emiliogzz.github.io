<?php

define('DB_NAME','Form');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('Can\'t use ' . DB_NAME . ' : ' . mysql_error());
}

echo 'Connected successfully';

$sexo = $_POST['Sexo'];
$profesion = $_POST['Profesion'];
$edad = $_POST['Edad'];
$preguntaUno = $_POST['PreguntaUno'];
$preguntaDos = $_POST['PreguntaDos'];
$preguntaTres = $_POST['PreguntaTres'];
$preguntaCuatro = $_POST['PreguntaCuatro'];
$preguntaCinco = $_POST['PreguntaCinco'];
$email = $_POST['Email'];




$sql = "INSERT INTO  Form (Sexo,Profesion,Edad,PreguntaUno,PreguntaDos,PreguntaTres,PreguntaCuatro,PreguntaCinco,Email) VALUES ('$sexo','$profesion','$edad','$preguntaUno','$preguntaDos','$preguntaTres','$preguntaCuatro','$preguntaCinco','$email')";

if(!mysql_query($sql)) {
	die('Error: ' . mysql_error());	
}

mysql_close();
?>