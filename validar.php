<?php
//simular base de datos
$userdb = "admin";
$passdb = "12345";
$namedb = "usuario administrador";


$usuario = $_POST["usuario"];
$contra = $_POST["contra"];


if ($usuario == $userdb && $contra == $passdb) {
    //usar cookies para guardar datos del uduario
    setcookie("USERNAME", $usuario);
    setcookie("NAMEUSER", $namedb);
    header("location: dashboard.php");
}else {
    header("location: ./");
}
?>