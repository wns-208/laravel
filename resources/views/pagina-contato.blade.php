<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato - Portal de Cursos</title>

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
          <a class="nav-link" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p class="lead">Envie sua dúvida ou mensagem para nossa equipe.</p>
  </div>
</header>

<!-- FORMULÁRIO -->
<section class="container my-5">

  <div class="row justify-content-center">

    <div class="col-md-8">

      <form>

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label class="form-label">Assunto</label>
          <input type="text" class="form-control" placeholder="Assunto da mensagem">
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar mensagem</button>

      </form>

    </div>

  </div>

</section>

<!-- INFORMAÇÕES DE CONTATO -->
<section class="bg-light py-5">
  <div class="container text-center">

    <h2>Outras formas de contato</h2>

    <p class="mt-3">
      📧 Email: contato@portalcursos.com
    </p>

    <p>
      📞 Telefone: (15) 99999-9999
    </p>

    <p>
      📍 Endereço: Rua Exemplo, 123 - Centro
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
