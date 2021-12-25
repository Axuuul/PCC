<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adoblog - Registre-se</title>
    <link rel="stylesheet" type="text/css" href="estilos/telaregistro.css">
</head>

<body>
    <div class="borda">
        <h1 class="textoRegistro">Registre-se</h1>

        <div class="razaoSocial">
            <label for="RazaoSocial" class="textoDigitarRegistro">Razão Social da ONG:</label> <br>
            <input type="text" id="razaosocialONG" class="campoDigitarRegistro" placeholder="Digite a Razão Social da ONG"/>
        </div>
        
        <div class="email">
            <label for="E-mailONG" class="textoDigitarRegistro">Email da ONG:</label> <br>
            <input type="text" id="emailONG" class="campoDigitarRegistro" placeholder="Digite o E-mail da ONG"/>
        </div>

        <div class="cnpj">
            <label for="CNPJ" class="textoDigitarRegistro">CNPJ da ONG:</label> <br>
            <input type="text" id="cnpjONG" class="campoDigitarRegistro" placeholder="Digite o CNPJ da ONG"/>
        </div>

        <div class="estado">
            <label for="Estado" class="textoDigitarRegistro">Estado de Residência da ONG:</label> <br>
            <input type="text" id="estadoONG" class="campoDigitarRegistro" placeholder="Digite o Estado da ONG"/>
        </div>

        <div class="cidade">
            <label for="Cidade" class="textoDigitarRegistro">Cidade de Residência da ONG:</label> <br>
            <input type="text" id="cidadeONG" class="campoDigitarRegistro" placeholder="Digite a Cidade da ONG"/>
        </div>

        <div class="senhaRegistro">
            <label for="senhaRegistro" class="textoDigitarRegistro">Senha:</label> <br>
            <input type="text" id="senhaONG" class="campoDigitarRegistro" placeholder="Digite sua Senha"/>
        </div>

        <div>
            <button type="button" class="botaoVoltar" onclick="location.href = 'telalogin.php';">Voltar</button>
            <button type="button" class="botaoRegistrar">Registrar-se</button>
        </div>
    </div>
</body>