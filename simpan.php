<?php

$con = new mysqli('localhost','root',"",'reglog-game','data_register');

$ID_player = $_POST['ID_player'];
$nick_player = $_POST['nick_player'];
$gmail_user = $_POST['gmail_user'];
$gmail_pass_user = $_POST['gmail_pass_user'];

$data = $con->query("INSERT INTO data (ID_player,nick_player,gmail_user,gmail_pass_user) VALUES ('$ID_player','$nick_player','$gmail_user','$gmail_pass_user')");
echo json_encode($data);

?>