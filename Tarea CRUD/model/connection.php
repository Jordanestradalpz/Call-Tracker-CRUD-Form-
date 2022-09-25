<?php 

$contraseña = "";
$usuario = "root";
$nombre_bd = "crudexe";

try {
    
    $bd = new PDO(
        'mysql:host=localhost; 
        dbname='.$nombre_bd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

} catch (Exception $e) {
   
    echo "No funciono la conexion".$e->getMesssage();

}

?>