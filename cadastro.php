<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
    <!-- Titulo Inicial -->
        <h1>FAÇA SEU CADASTRO</h1>

        <!-- Formulário HTML -->
        <form action="cadastro.html">

            <!-- Pede o E-mail do usuário -->
            <label for="email">E-MAIL:</label>
            <br>
            <!-- Campo de preenchimneto do E-mail -->
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail...">
            <br>
            <br>

            <!-- Pede a senha do usuário -->
            <label for="senha">SENHA:</label>
            <br>
            <!-- Campo de preenchimneto da senha -->
            <input type="password" name="senha" id="senha" placeholder="Digite sua Senha...">
            <br>

            <!-- Envia as informações -->
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>