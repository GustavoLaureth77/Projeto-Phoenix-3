<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body {
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .conteiner{
            background-color: #fff;
            padding: 60px 80px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) ;
            text-align: center;
        }
        input{
            margin-top: 10px;
        }
        
        button{
            padding: 10px 20px;
            font-size: 16px;
            background-color: rgb(17, 213, 17);
            color: white;
            border: none;
            border-radius: 10px;
            margin-top: 10px;
        }
    </style>

</head>
<body>
    <div class="conteiner">
        <!-- Titulo Inicial do código -->
        <h1>FAÇA SEU LOGIN</h1>
        <!--Formulário HTML -->
        <form action="login.html">
            <!-- Solicita o email do usuário -->
            <label for="email">E-MAIL:</label>
            <br>
            <!-- Campo de preenchimento de email -->
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail...">
            <br><br>
            <!-- Solicita a senha do usuário -->
            <label for="senha">SENHA:</label>
            <br>
            <!-- Campo de preenchimento de senha -->
            <input type="password" name="senha" id="senha" class="senha" placeholder="Insira sua Senha...">
            <br>
            <!-- Botão para acessar o login do usuário-->
            <div class="botao">
                <button type="submit" name="button">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>