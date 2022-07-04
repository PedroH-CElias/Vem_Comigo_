<?php
include_once("conecta.php"); // Inclui a classe conecta

function validaUsuario($user, $senha)
{
    $sql = "SELECT * FROM usuario WHERE email = '" . $user . "' AND senha = '" . $senha . "';";
    $conexao = abreConexao(); // Abre a conexão com o BD

    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_array($resultado);
        $nome = explode(" ", $usuario['nome']);
        $_SESSION['usuario'] = $nome[0];
        $cod = $usuario['cod'];
        $_SESSION['codigo'] = $cod;
        return $usuario;
    } else {
        return null;
    }
}
