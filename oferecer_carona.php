<?php

session_start();
$nomeOfertante = $_SESSION['usuario'];
$codUsuario = $_SESSION['codigo'];
if ($_SESSION['login'] == true) {
} else {
    header("Location:login.php?mensagem=nl");
}

?>
<?php
if (isset($_POST["submit"])) {
    include_once("conecta.php");
    $vagas = ($_POST["vagas"]);
    $valor = ($_POST["valor"]);
    $dataSaida = ($_POST["dataSaida"]);
    $saida = ($_POST["saida"]);
    $chegada = ($_POST["chegada"]);
    $modelo = ($_POST["modelo"]);
    $placa = ($_POST["placa"]);
    $tipo = ($_POST["tipo"]);
    $infoAd = ($_POST["infoAd"]);


    $resultado = mysqli_query($conexao = abreConexao(), "INSERT INTO carona(data,cod_usuario,localSaida,localChegada,nomeOfertante,valor_viagem,qtd_vaga, modelo,placa,tipo,infoAd) 
    VALUES('$dataSaida','$codUsuario','$saida','$chegada','$nomeOfertante','$valor','$vagas','$modelo','$placa','$tipo','$infoAd')");


?>
    <meta http-equiv="refresh" content="1; URL='oferecer_carona.php?mensagem=ui'" /><?php
                                                                                }
                                                                                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/footer_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/favecon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/oferecer_carona.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css" type="text/css">
    <style>
        .final {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .map {
            height: 300px;
            width: 85%;
        }

        h2 {
            font-family: monospace;
            color: #4835d4;
            text-align: center;
            margin: 5%;
        }

        hr {
            margin-top: 5%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>
    <title>VemComigo - Oferecer Carona</title>
</head>

<body>
    <?php
    include_once("header_logado.php");
    ?>

    <main>
        <section class="h-100 h-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <form class="row g-0" action="oferecer_carona.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo ($codCarona); ?>">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #4835d4;">Informações da carona</h3>

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="number" id="form3Examplev2" class="form-control form-control-lg" name="vagas" placeholder="Quantidade" required />
                                                        <label class="form-label" for="form3Examplev2">Vagas disponíveis</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="form-outline">
                                                        <input type="number" id="form3Examplev3" class="form-control form-control-lg" placeholder="R$" name="valor" required />
                                                        <label class="form-label" for="form3Examplev3">Valor por vaga</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="col-sm-8">
                                                    <input type="datetime-local" name="dataSaida" class="form-control" id="data" placeholder="Data" style="padding:5px" required>
                                                    <label class="form-label" for="form3Examplev3">Data e hora da saída</label>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Examplev4" name="saida" class="form-control form-control-lg" placeholder="Centro" required />
                                                    <label class="form-label" for="form3Examplev4">Local de saída</label>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2" id="primeiraDiv">
                                                <div class="form-outline" id="segundaDiv">
                                                    <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="chegada" placeholder="IFSULDEMINAS" required />
                                                    <label class="form-label" for="form3Examplev4">Local de chegada</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- -------------------------------------- AQUI LIMITA O PRIMEIRO FORM--------------------------------------->
                                    <div class="col-lg-6 bg-indigo text-white">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Informações do veículo</h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" placeholder="Uno com escada" name="modelo" required />
                                                    <label class="form-label" for="form3Examplea2">Modelo do veículo *</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea3" class="form-control form-control-lg" placeholder="XXX-XXXX" name="placa" required />
                                                        <label class="form-label" for="form3Examplea3">Placa do veículo *</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea3" class="form-control form-control-lg" placeholder="Moto" name="tipo" required />
                                                        <label class="form-label" for="form3Examplea3">Tipo de veículo *</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" placeholder="Cor | Motor | Ano" name="infoAd" required />
                                                    <label class="form-label" for="form3Examplea2">Informação adicional</label>
                                                </div>
                                            </div>
                                            <input type="submit" class="button" name="submit" data-mdb-ripple-color="dark" value="Registrar">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <h2>Veja aqui possíveis rotas</h2>
        <div class="final">

            <div id="map" class="map">
                <script type="text/javascript">
                    var map = new ol.Map({
                        target: 'map',
                        layers: [
                            new ol.layer.Tile({
                                source: new ol.source.OSM()
                            })
                        ],
                        view: new ol.View({
                            center: ol.proj.fromLonLat([-46.6106, -20.7197]),
                            zoom: 14
                        })
                    });
                </script>
            </div>
        </div>
    </main>
    <?php
    include_once("footer.php");
    ?>

</body>
<script src="js/botao_adicionar.js"></script>

</html>