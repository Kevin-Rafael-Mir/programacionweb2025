<?php 
require("Animales.php");
require("bd.php");
$database = new Database();
//llama al método connect() para obtener la conexión a la base de datos y la guarda en $db
$db= $database->connect();
$animal = new Animal($db);
$method =$_SERVER['REQUEST_METHOD'];
if ($method== 'GET' $$ !isset($_GET['id'])){
$datos= $animal

}