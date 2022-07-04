<header>
  <nav class="navbar navbar-expand-lg static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/pneu.png" alt="Logo" height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="listaDeCaronas.php"><i class="fa-solid fa-magnifying-glass"></i> Caronas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="oferecer_carona.php"><i class="fa-solid fa-bolt-lightning"></i> Oferecer Carona</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-list-check"></i> Bem-Vindo(a) <?php echo $_SESSION['usuario']; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="caronasPegadas.php">Minhas Caronas</a></li>
              <li><a class="dropdown-item" href="listaDeMinhasCaronas.php">Minhas Caronas Ofertadas</a></li>
              <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<span class="protocol">
  <p><i class="fa-solid fa-triangle-exclamation"></i> Protocolo Coronavírus!<a href="https://www.gov.br/saude/pt-br/assuntos/noticias/2022/janeiro/ministerio-da-saude-reduz-para-7-dias-o-isolamento-de-casos-por-covid-19/apresentacao-da-coletiva-de-imprensa-ministerio-da-saude-reduz-para-7-dias-o-isolamento-de-casos-por-covid-19.pdf" target="_blank"> Clique aqui</a> e saiba mais!</p>
</span>