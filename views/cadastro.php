<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/assets/css/cadastro.css">
    <title>Cadastrar Vendedor</title>
    <link rel="icon" type="image/png" href="/entre_paginas/public/assets/favicon.png">
</head>
<body>

    <div class="card">

        <img src="public/assets/logo22.png" alt="entre_paginas Livraria" class="logo">

        <form action="index.php?controller=usuario&action=store" method="POST" style="width: 100%;">

            <div class="dados">
                <p class="dados-texto">Nome Completo</p>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div class="spacer"></div>

            <div class="dados">
                <p class="dados-texto">E-mail</p>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="spacer"></div>

            <div class="dados">
                <p class="dados-texto">Senha</p>
                <div class="dados-senha">
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
                </div>
            </div>

            <div style="width: 100%; display: flex; justify-content: center;">
                <button type="submit" class="cadastrar">Cadastrar</button>
            </div>

        </form>

        <div class="rodape-links">
            <a href="index.php?controller=auth&action=form">
                <img src="public/assets/casa.png" alt="">
                Entrar
            </a>
        </div>

    </div>

</body>
</html>