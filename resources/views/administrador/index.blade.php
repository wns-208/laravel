<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerenciar Portfólio — Grace Courtney</title>
  <meta name="robots" content="noindex, nofollow" />
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="nav" {{ route('administrador.index') }}>
    <a href="index.html" class="logo">Grace<span>.</span></a>
    <ul class="nav-links">
      <li><a href="{{ route('persona.index') }}">Voltar ao site</a></li>
    </ul>
  </nav>

  <section class="section">
    <div class="manage-head">
      <div>
        <span class="eyebrow">Admin — Portfólio</span>
        <h2>Gerenciar projetos</h2>
        <p class="muted" id="count"></p>
      </div>
      <div style="display:flex; gap:12px; flex-wrap:wrap;">
        <button class="btn btn-ghost" id="restoreBtn">&#8634; Restaurar padrão</button>
        <button class="btn btn-primary" id="newBtn">+ Novo projeto</button>
      </div>
    </div>

    <div class="manage-grid" id="manageGrid"></div>
  </section>

  <!-- MODAL -->
   <!-- <form action="{{ route('administrador.adicionar') }}" method="post"> -->
    @csrf
    <div class="modal-overlay" id="modal">
      <div class="modal">
        <h3 id="modalTitle">Novo projeto</h3>
        <div class="field">
          <label>Título *</label>
          <input id="fTitle" type="text" name="titulo" placeholder="Atelier Lumen" />
        </div>
        <div class="field">
          <label>Categoria *</label>
          <input id="fCategory" name="categoria" type="text" placeholder="Identidade Visual" />
        </div>
        <div class="field">
          <label>Tamanho (colunas)</label>
          <select id="fSpan" name="span">
            <option value="1">Pequeno (1 coluna)</option>
            <option value="2">Médio (2 colunas)</option>
            <option value="3">Grande (3 colunas)</option>
          </select>
        </div>
        <div class="field">
          <label>Cor / gradiente</label>
          <div class="swatches" id="swatches"></div>
        </div>
        <div class="modal-actions">
          <button type="submit" class="btn btn-ghost full" id="cancelBtn">Cancelar</button>
          <button type="submit" class="btn btn-primary full" id="saveBtn">Salvar</button>
        </div>
      </div>
    </div>
  <!-- </form> -->

  <script src="{{ asset('portfolio.js') }}"></script>
  <script src="{{ asset('gerenciar.js') }}"></script>
</body>
</html>
