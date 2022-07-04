<?php
if (isset($_POST["submit"])) {
    include_once("conecta.php");
    $nome = ($_POST["nome"]);
    $email = ($_POST["email"]);
    $senha = ($_POST["senha"]);
    $resultado = mysqli_query($conexao = abreConexao(), "INSERT INTO usuario(cod, nome, email, senha) VALUES('DEFAULT','$nome', '$email', '$senha')");
    echo $resultado;
?>
    <meta http-equiv="refresh" content="1; URL='login.php?mensagem=ui'" /><?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/footer_header.css">
    <link rel="shortcut icon" href="img/favecon.ico" type="image/x-icon">
    <title>VemComigo - SingUp</title>
</head>

<body>
    <?php
    include_once("header.php");
    ?>
    <main>
        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border:none;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <h1 class="titulo-cadastro">Cadastrar</h1>

                                        <form action="cadastro.php" method="post" class="mx-1 mx-md-4">

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="form3Example1c" name="nome" class="form-control" placeholder="Digite seu nome" required />
                                                    <label class="form-label" for="form3Example1c">Nome</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="Digite seu email" />
                                                    <label class="form-label" for="form3Example3c">Email</label>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required />
                                                    <label class="form-label" for="form3Example4c">Senha</label>
                                                </div>
                                            </div>

                                            <div class="form-check d-flex justify-content-center mb-5">
                                                <input class="form-check-input me-2" type="checkbox" required value="" id="form2Example3c" />
                                                <label class="form-check-label" for="form2Example3">
                                                    Eu concordo com todos <a href="termos.html" target="_blank">termos de serviço</a>
                                                </label>
                                            </div>
                                            <div class="text-center text-lg-start mt-4 pt-2">
                                                <input type="submit" name="submit" id="submit" class="botao" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                                <p class="small fw-bold mt-2 pt-1 mb-0">Ja possui uma conta? <a href="login.php" class="link-registro">Logar</a></p>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="img/login.gif" class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>