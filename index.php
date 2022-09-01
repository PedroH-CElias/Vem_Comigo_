<?php

session_start();
if ($_SESSION['login'] == true) {
} else {
  header("Location:login.php?mensagem=nl");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/footer_header.css">
  <link rel="stylesheet" href="css/formulario_procura_carona.css">
  <link rel="shortcut icon" href="img/favecon.ico" type="image/x-icon">
  <title>Vem Comigo</title>
</head>

<body>
  <?php
  include_once("header_logado.php");
  ?>
  <!-- Page Content -->
  <main>

    <?php
    include_once("procura_carona.php");
    ?>

    <div class="mensagens">
      <div class="mensagem">
        <i class="fa-solid fa-comments-dollar"></i>
        <h3> Pediu carona na concorrência e estava mais caro que habitual? Foi abastecer seu veículo e o valor cobrado foi de um aluguel? Xiiiiii</h3>

        <p>Não criemos pânico, saia de fininho e <b>Vem Comigo! </b>. Aqui você divide o valor de uma carona local com outras pessoas, fazendo bem para seu bolso e para o bolso dos outros ocupantes.
          Vem com a gente! Em tempos como esse, nada melhor que uma solução rápida!</p>
      </div>
      <div class="mensagem">
        <i class="fa-solid fa-shield"></i>
        <h3>Ainda tem medo ou preconceito com caronas?</h3>
        <p>Aqui você pode ficar despreocupado com os ofertantes de caronas. Implantamos um botão S.O.S que
          automaticamente
          informa para as autoridades mais próximas a placa, nome do condutor e localização. Você ainda pode entrar em contato direto com o
          motorista via Wpp ou E-mail. </p>
      </div>
      <div class="mensagem">
        <i class="fa-solid fa-truck-fast"></i>
        <h3>Quer praticidade, velocidade e conforto?</h3>
        <p>Evite frustações, raiva e desconforto. Utilize nosso site <b>Vem Comigo </b> e evite pegar ônibus lotado e
          deconfortável, prometemos ainda, cupoms de desconto exclusivos para nossos usuários.</p>
      </div>
    </div>
    <div class="texto-animado">
      <div class="word">Economize</div>
      <div class="word">Compartilhe</div>
      <div class="word">e...</div>
      <div class="word">Vem Comigo!</div>
      <div class="imagem-fundo">
      </div>
    </div>
    <div class="opcao">
      <img src="img/vemcomigo.png" alt="">
      <div class="opcao-texto">
        <h3>Quer economizar dinheiro?</h3>
        <a href="oferecer_carona.php">Oferecer Carona</a>
        <a href="listaDeCaronas.php">Ver caronas disponíveis</a>
      </div>
    </div>
  </main>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>