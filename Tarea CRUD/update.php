<?php

include_once 'model/connection.php';

$identifier = $_POST['id'];
$name = $_POST["inputName"];
$phone = $_POST["inputPhone"];
$reason = $_POST["inputReason"];

$consult = $bd->prepare("UPDATE calltracker SET cxname = ?, phone = ?, reason4call = ? WHERE id = ?");
$answer = $consult->execute([$name,$phone,$reason,$identifier]);

if($answer){
    header('Location: index.php');
}else{
    echo "Data update failed.";
}

?>