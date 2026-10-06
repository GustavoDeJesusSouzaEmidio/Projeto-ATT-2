<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" type="image/png" href="/entre_paginas/public/assets/favicon.png">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Livros - entre_paginas</title>
  <link rel="stylesheet" href="/entre_paginas/public/assets/css/livros.css">
  <style>
    .hero { background-image: url("/entre_paginas/public/assets/fundo2.png"); }
  </style>
  <style>
    .hero {
      background-image: url("/entre_paginas/public/assets/fundo2.png");
    }
  </style>
</head>
<body>

  <nav>
    <img src="/entre_paginas/public/assets/logo22.png" alt="entre_paginas" class="logo">
    <div class="nav-direita">
      <a class="nav-icone" href="/entre_paginas/index.php?controller=dashboard&action=index">
        <img src="/entre_paginas/public/assets/grafico1.png" alt="dashboard" style="height:25px;width:25px;">
      </a>
      <a class="nav-icone" href="/entre_paginas/index.php?controller=auth&action=logout">
        <img src="/entre_paginas/public/assets/usuario.png" alt="vendedor" style="height:25px;width:25px;">
      </a>
    </div>
  </nav>

  <div class="hero">
    <h2>Boas histórias<br>te esperam aqui.</h2>
    <p>Descubra novos mundos, vilões e<br>heróis.</p>
  </div>

  <div class="section" style="margin-top: 24px;">
    <div class="generos-grid">

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=romance">
        <div class="romance">
          <img src="/entre_paginas/public/assets/romance.png">
        </div>
        <span class="genero-nome">romance</span>
      </a>

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=estudos">
        <div class="estudos">
          <img src="/entre_paginas/public/assets/estudos.png">
        </div>
        <span class="genero-nome">estudos</span>
      </a>

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=teologico">
        <div class="teologico">
          <img src="/entre_paginas/public/assets/teologico.png">
        </div>
        <span class="genero-nome">teológico</span>
      </a>

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=fantasia">
        <div class="fantasia">
          <img src="/entre_paginas/public/assets/fantasia.png">
        </div>
        <span class="genero-nome">fantasia</span>
      </a>

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=suspense">
        <div class="suspense">
          <img src="/entre_paginas/public/assets/suspense.png">
        </div>
        <span class="genero-nome">suspense</span>
      </a>

      <a class="genero-livros" href="/entre_paginas/index.php?controller=genero&action=index&genero=terror">
        <div class="terror">
          <img src="/entre_paginas/public/assets/terror.png">
        </div>
        <span class="genero-nome">terror</span>
      </a>

    </div>
  </div>

</body>
</html>