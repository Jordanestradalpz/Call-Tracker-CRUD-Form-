<?php

include_once 'model/connection.php';

$identifier = $_GET['id'];

$consult = $bd->prepare("DELETE FROM calltracker WHERE id = ?");
$answer = $consult->execute([$identifier]);

if($answer){
    header('Location: index.php');
}else{
    echo "File cannot be deleted.";
}

?>