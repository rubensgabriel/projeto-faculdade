<?php

include("./controller/conecta.php");

?>

<!DOCTYPE html>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Médico</title>

    <!-- REMIXICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/remedio.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    <div class="login">
        <img src="assets/img/bg.jpg" alt="Imagem de fundo azul" class="login__img">
        <form  name="autenticacao"  method="post" class="login__form">
            <h1 class="login__title">Entrar</h1>

    

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" required class="login__input"  name = "login" placeholder=" ">
                        <label for="" class="login__label">Login</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="password" required class="login__input" name = "senha" id="login-pass" placeholder=" ">
                        <label for="" class="login__label">Senha</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>

     


            </div>

            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" class="login__check-input">
                    <label for="" class="login__check-label">Lembrar-me</label>
                </div>

                <a href="codigo.html" class="login__forgot">Esqueceu sua Senha?</a>
            </div>

            <button class="login__button" type="submit" id="btlogin";>Entrar</button>

        </form>
    </div>

    <script src="assets/js/login.js"></script>
</body>
</html>


<script>
// Função de autenticação  
let btlogin = document.getElementById("btlogin");
btlogin.addEventListener("click", async (event) => {
  event.preventDefault();
  console.log("bbbbbbb");
  var email = $("input[name='login']").val();
  var senha = $("input[name='senha']").val();

 
  
  $("input[name='login']").css("display", "none");
  $("input[name='senha']").css("display", "none");

  var loader = $("<img>").addClass("loader-image").attr("src", "loader.gif");
  $("form").append(loader);


  try {
    const response = await $.ajax({
      type: "POST",
      url: "ajx/login.php",
      data: {
        email: email,
        senha: senha
      },
      dataType: "json"
    });

    const cod = response.login.cod;
    const mensagem = response.login.mensagem;

    await mostrarAlerta(cod, mensagem);
    loader.remove();


    if (cod == 1) {
      window.location.href = 'principal.html';
    }
  } catch (error) {
    console.error("Erro na requisição AJAX:", error);
  }
});




// Alerta personalizado login 
async function mostrarAlerta(sucesso, mensagem) {
  var classeAlerta = sucesso == 1 ? "alert-success" : "alert-error";

  var alerta = $("<div>").addClass(classeAlerta).html(mensagem);
  $("body").append(alerta);
  
  await new Promise((resolve) => setTimeout(resolve, 3000));

  alerta.fadeOut(300, function() {
    alerta.remove();
  });
}


</script>
