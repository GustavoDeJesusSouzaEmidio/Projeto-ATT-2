<!doctype html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/png" href="/entre_paginas/public/assets/favicon.png">
    <meta charset="utf-8">
    <title>Login - entre_paginas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/css/login.css">
</head>
<body>
<div class="body">
    <div class="card">
        <div class="logo">
            <img src="public/assets/logo11.png" alt="logo" class="logo">

           
        </div>
       
        <form method="post" action="/entre_paginas/index.php?controller=auth&action=login">
          <h1 class="h1"> acesse como funcionario aqui </h1>
           <div class="dados"> 
            
            <input type="email" name="email" required autocomplete="username" placeholder="E-mail">
            </div>
           
           
           <div class="dados"> <input type="password" name="senha" required autocomplete="current-password" placeholder="Senha">
            </div>
           
            
                <button class="entrar" type="submit">Entrar</button>
               
               <div class="rodape-abas">
              <a href="index.php?controller=usuario&action=create">Cadastrar</a>
               <span class="dot">•</span>
             <img src="public/assets/casa.png" alt="home-icon" class="casa">
</div>

        
           
        </form>


        
    </div>
</div>
</body>
</html>

