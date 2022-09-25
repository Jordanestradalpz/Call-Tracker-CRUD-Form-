<?php

print_r($_POST);
if(empty($_POST["inputName"]) || empty($_POST["inputPhone"]) || empty($_POST["inputReason"])){
    echo "Error, please complete the formulary.";
    exit();
}

include_once 'model/connection.php';
$name = $_POST["inputName"];
$phone = $_POST["inputPhone"];
$reason = $_POST["inputReason"];

$consult = $bd->prepare("INSERT INTO calltracker(cxname, phone, reason4call) VALUES(?,?,?);");
$result = $consult->execute([$name, $phone, $reason]);

if($result === true){
    header("Location: index.php");
}else{
    echo "Ups, something went wrong.";
}

?>