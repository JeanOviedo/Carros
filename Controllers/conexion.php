<?php 

$mysqli= new mysqli('localhost','root','','reto');

if ($mysqli->connect_error){
die ('error'.$mysqli->connect_error);
} 



 ?>