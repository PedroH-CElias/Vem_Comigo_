<?php
session_start();
include_once("caronas.php");
$codCarona = $_GET["id"];
$codUsuario = $_SESSION['codigo'];
if ($_SESSION['login'] == true) {
} else {
    header("Location:login.php?mensagem=nl");
}
header("Location:caronasPegadas.php?mensagem=nl");
pegarCarona($codCarona, $codUsuario);
?>