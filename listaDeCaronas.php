<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/footer_header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/lista_carona.css">
    <link rel="shortcut icon" href="img/favecon.ico" type="image/x-icon">
</head>

<body>

    <?php include_once("header_logado.php"); ?>

    <div class="container">
        <div class="text-center">
            <h1>Caronas Cadastradas</h1>
        </div>
        <table class="table">
            <?php include_once("caronas.php");
            echo ('<tr> <td>' . "<b>Local Saída</b>" . '</td> <td>' . "<b>Local Chegada</b>" . '</td>
            <td>' . "<b>Data de saída</b>" . '</td> <td>' . "<b>Quantidade de vagas</b>" . '</td> <td>'  . "<b>Valor da Viagem</b>" . '</td> <td>' . "<b>Nome do ofertante</b>" . '</td></tr>');
            $vetcaronas = retornaCarona();
            if ($vetcaronas != null) {
                foreach ($vetcaronas as $carona) {
                    $localSaida = $carona['localSaida'];
                    $localChegada = $carona['localChegada'];
                    $data = $carona['data'];
                    $qtd_vagas = $carona['qtd_vaga'];
                    $valor_viagem = $carona['valor_viagem'];
                    $nomeOfertante = $carona['nomeOfertante'];
                    $codCarona = $carona['cod_carona'];
                    echo ('<tr> <td>' . $localSaida . '</td> <td>' . $localChegada . '</td>
                <td>' . $data . '</td> <td>' . $qtd_vagas . '</td> <td>' . 'R$' . $valor_viagem . '</td> <td>' . $nomeOfertante . '</td> <td>' .
                        '<a href="pegarCarona.php?id=' . $codCarona . '" class="btn btn-primary" onclick="return confirm(\'Deseja pegar carona?\');">Pegar</a></td> </tr>');
                } // fecha foreach
            } // fecha if
            else {
                echo ("<tr><td>Nenhum registro encontrado!</td></tr>");
            }
            ?>
        </table>
    </div>
    <div class="opcao">
        <img src="img/vemcomigo.png" alt="">
        <div class="opcao-texto">
            <h3>Quer economizar dinheiro? <br>Vem Comigo!</h3>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</body>