<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos - Portal de Cursos</title>

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
          <a class="nav-link" href="{{ route('sobre') }">Sobre</a>
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
    <h1>Nossos Cursos</h1>
    <p class="lead">Conheça as formações profissionais disponíveis em nossa instituição.</p>
  </div>
</header>

<!-- CURSOS -->
<section class="container my-5">

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="Desenvolvimento de Sistemas">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Aprenda programação, lógica de software, banco de dados e desenvolvimento web.
            Ideal para quem quer trabalhar na área de tecnologia.
          </p>
          <a href="#" class="btn btn-primary">Detalhes</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d" class="card-img-top" alt="Administração">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Desenvolva habilidades em gestão de empresas, marketing,
            finanças e liderança de equipes.
          </p>
          <a href="#" class="btn btn-primary">Detalhes</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="Meio Ambiente">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude preservação ambiental, sustentabilidade e gestão
            de recursos naturais.
          </p>
          <a href="#" class="btn btn-primary">Detalhes</a>
        </div>
      </div>
    </div>

    <!-- Mecânica -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0" class="card-img-top" alt="Mecânica">
        <div class="card-body">
          <h5 class="card-title">Mecânica</h5>
          <p class="card-text">
            Aprenda manutenção de motores, máquinas industriais
            e sistemas mecânicos.
          </p>
          <a href="#" class="btn btn-primary">Detalhes</a>
        </div>
      </div>
    </div>

  </div>

</section>

<!-- SEÇÃO EXTRA -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2>Por que escolher nossos cursos?</h2>
    <p class="mt-3">
      Oferecemos ensino de qualidade, professores qualificados e formação
      voltada para o mercado de trabalho. Nossos cursos são pensados para
      preparar você para os desafios profissionais.
    </p>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>