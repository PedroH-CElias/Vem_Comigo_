<?php


include_once("conecta.php"); // Inclui a classe conecta
function retornaCarona()
{
    $sql = "SELECT * FROM carona ORDER BY cod_usuario";
    $conexao = abreConexao(); # Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            $carona[] = $row;
        }
        return $carona;
    } else {
        return null;
    }
}

function retornaCaronaPorId($codUsuario)
{

    $sql = "SELECT * FROM carona WHERE cod_usuario = " . $codUsuario;

    $conexao = abreConexao(); # Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            $carona[] = $row;
        }
        return $carona;
    } else {
        return null;
    }
}


function insereCarona($localSaida, $localChegada, $data, $qtd_vagas, $valor_viagem, $nomeOfertante, $modelo, $placa, $tipo, $infoAd)
{
    echo "Aqui insere";
    // Define o comando SQL  (insert)

    $sql = "INSERT INTO carona(localSaida, localChegada, data, qtd_vaga, valor_viagem, nomeOfertante, modelo, placa, tipo, infoAd)
            VALUES('$localSaida', '$localChegada', '$data','$qtd_vagas', '$valor_viagem', '$nomeOfertante', '$modelo', '$placa', '$tipo', '$infoAd');";

    $conexao = abreConexao(); // Abre a conexão com o BD
    $conexao->query($sql); // Executa o comando SQL
    $conexao->close();     // Fecha a conexão com o BD
}

function pegarCarona($codCarona, $codUsuario)
{
    $sql = "UPDATE carona SET cod_passageiro = '$codUsuario' WHERE cod_carona = '$codCarona'";
    $conexao = abreConexao();
    $conexao->query($sql); // Executa o comando SQL
    $conexao->close();     // Fecha a conexão com o BD
}


function retornaCaronaPegada($codUsuario)
{

    $sql = "SELECT * FROM carona WHERE cod_passageiro = " . $codUsuario;

    $conexao = abreConexao(); # Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            $carona[] = $row;
        }
        return $carona;
    } else {
        return null;
    }
}


function retornaCaronaPesquisada($saida, $chegada)
{
    $sql = "SELECT * FROM carona WHERE localSaida LIKE '$saida' OR localChegada LIKE '$chegada'";

    $conexao = abreConexao(); # Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            $carona[] = $row;
        }
        return $carona;
    } else {
        return null;
    }
}
function excluiCarona($codCarona)
{
    // Define o comando SQL  (delete)
    $sql = "DELETE FROM carona WHERE cod_carona = $codCarona";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $conexao->query($sql); // Executa o comando SQL
    $conexao->close(); // Fecha a conexão com o BD 
}
