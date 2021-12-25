<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adoblog - Login</title>
    <link rel="stylesheet" type="text/css" href="estilos/telalogin.css">
</head>

<body>
    <div class="borda">
        <h1 class="textoLogin">Login</h1>

        <div class="email">
            <label for="E-mail" class="textoDigitar">Email:</label> <br>
            <input type="text" id="email" class="campoDigitar" placeholder="Digite seu E-mail"/>
        </div>

        <div class="senha">
            <label for="senha" class="textoDigitar">Senha:</label> <br>
            <input type="text" id="senha" class="campoDigitar" placeholder="Digite sua Senha"/>
        </div>

        <div>
            <button type="button" class="botaoRegistrar" onclick="location.href = 'telaregistro.php';">Registrar-se</button>
            <button type="button" class="botaoEntrar">Entrar</button>
        </div>
    </div>
</body>