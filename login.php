<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone) 
        VALUES ('$nome','$senha','$email','$telefone')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/logi.css">
    <title>Tela de login</title>
</head>
<body>
    <a href="index.html">Voltar</a>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="cadastro.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>use seu e-mail para cadastro</span>

                <input type="text" name="nome" id="nome" placeholder="Nome completo" class="inputUser" required>
                <label for="nome" class="labelInput"></label>

                <input type="password" name="senha" id="senha" placeholder="Senha" class="inputUser" required>
                <label for="senha" class="labelInput"></label>

                <input type="text" name="email" id="email" placeholder="Email" class="inputUser" required>
                <label for="email" class="labelInput"></label>

                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" class="inputUser" required>
                <label for="telefone" class="labelInput"></label>

                <input class="inputSubmit" type="submit" name="submit" id="submit">
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="testLogin.php" method="POST">
            <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>

                <span>Utilize seu e-mail e sua senha</span>

                <form action="testLogin.php" method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                    <a href="#">Esqueceu sua senha?</a>
                </form>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Seja bem vindo!</h1>
                    <p>Registre-se com seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Que bom te ver de novo!</h1>
                    <p>Insira seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>