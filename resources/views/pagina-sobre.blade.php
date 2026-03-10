<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('curso') }}">Cursos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1>Sobre o Portal de Cursos</h1>
    <p class="lead">Conheça nossa missão, visão e objetivo na formação profissional.</p>
  </div>
</header>

<!-- SOBRE -->
<section class="container my-5">

  <div class="row align-items-center">

    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded" alt="Estudantes">
    </div>

    <div class="col-md-6">
      <h2>Quem Somos</h2>
      <p>
        O Portal de Cursos é uma plataforma educacional dedicada a oferecer
        formação profissional de qualidade. Nosso objetivo é preparar estudantes
        para o mercado de trabalho por meio de cursos técnicos e práticos.
      </p>

      <p>
        Trabalhamos com áreas importantes da indústria e da tecnologia,
        oferecendo cursos como Desenvolvimento de Sistemas, Administração,
        Meio Ambiente e Mecânica.
      </p>

      <p>
        Nossa equipe é formada por professores experientes e profissionais
        qualificados que buscam oferecer ensino moderno e atualizado.
      </p>
    </div>

  </div>

</section>

<!-- MISSÃO VISÃO -->
<section class="bg-light py-5">
  <div class="container">

    <div class="row text-center">

      <div class="col-md-4">
        <h3>Missão</h3>
        <p>
          Oferecer educação de qualidade que prepare os alunos
          para os desafios do mercado de trabalho.
        </p>
      </div>

      <div class="col-md-4">
        <h3>Visão</h3>
        <p>
          Ser referência em formação profissional e inovação
          no ensino técnico.
        </p>
      </div>

      <div class="col-md-4">
        <h3>Valores</h3>
        <p>
          Compromisso com o ensino, ética profissional,
          inovação e desenvolvimento sustentável.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>