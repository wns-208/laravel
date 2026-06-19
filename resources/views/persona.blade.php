<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grace Courtney — Designer Digital Freelancer</title>
  <meta name="description" content="Designer digital especializada em ilustração, identidade visual e design de interfaces. Disponível para projetos freelance." />
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- NAV -->
  <nav class="nav">
    <a href="#" class="logo">Grace<span>.</span></a>
    <ul class="nav-links">
      <li><a href="#sobre">Sobre</a></li>
      <li><a href="#servicos">Serviços</a></li>
      <li><a href="#portfolio">Portfólio</a></li>
      <li><a href="#depoimentos">Depoimentos</a></li>
      <li><a href="{{ route('administrador.index') }}">Gerenciar</a></li>
      <li><a href="#contato" class="btn-small">Contratar</a></li>
    </ul>
    <button class="menu-btn" id="menuBtn">&#9776;</button>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <div class="hero-text">
      <span class="badge">&#10022; Disponível para freelance</span>
      <h1>Designs <em>digitais</em> que contam a sua história.</h1>
      <p class="lead">Sou Grace Courtney, designer digital. Transformo ideias em ilustrações, identidades visuais e interfaces que se destacam.</p>
      <div class="cta-row">
        <a href="#contato" class="btn btn-primary">Iniciar projeto &rarr;</a>
        <a href="#portfolio" class="btn btn-ghost">Ver portfólio</a>
      </div>
      <div class="hero-stats">
        <div><strong>50+</strong><span>Projetos entregues</span></div>
        <div><strong>30+</strong><span>Clientes felizes</span></div>
        <div><strong>4.9&#9733;</strong><span>Avaliação média</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="blob"></div>
      <div class="avatar-big">GC</div>
      <div class="float-card card-1">&#127912; Ilustração</div>
      <div class="float-card card-2">&#10022; Branding</div>
      <div class="float-card card-3">&#128241; UI Design</div>
    </div>
  </header>

  <!-- TRUST -->
  <section class="trust">
    <p>Confiado por equipes criativas em</p>
    <div class="logos">
      <span>STUDIO&middot;NOVA</span>
      <span>PIXEL HAUS</span>
      <span>ATELIER 23</span>
      <span>FORMA &amp; COR</span>
      <span>MAKERS CO.</span>
    </div>
  </section>

  <!-- SOBRE -->
  <section id="sobre" class="section about">
    <div class="section-head">
      <span class="eyebrow">01 — Sobre mim</span>
      <h2>Uma designer com olhar artístico e mãos técnicas.</h2>
    </div>
    <div class="about-grid">
      <div class="about-text">
        <p>Tenho 23 anos e desenho desde sempre. Hoje uno minha paixão por <strong>pintura</strong> e <strong>arte digital</strong> com técnica em <strong>design de interfaces</strong> para criar projetos que são, ao mesmo tempo, bonitos e funcionais.</p>
        <p>Sou introspectiva no processo e amigável na entrega. Adoro mergulhar fundo no que cada cliente quer comunicar — e devolver algo que supere a expectativa.</p>
        <ul class="check-list">
          <li>&#10003; Comunicação clara em todas as etapas</li>
          <li>&#10003; Entregas no prazo, sempre</li>
          <li>&#10003; Revisões inclusas em cada pacote</li>
          <li>&#10003; Arquivos finais organizados e prontos para uso</li>
        </ul>
      </div>
      <div class="about-skills">
        <h3>Skills</h3>
        <div class="skill"><span>Desenho digital</span><div class="bar"><i style="width:95%"></i></div></div>
        <div class="skill"><span>Ilustração</span><div class="bar"><i style="width:92%"></i></div></div>
        <div class="skill"><span>UI / UX Design</span><div class="bar"><i style="width:80%"></i></div></div>
        <div class="skill"><span>Branding</span><div class="bar"><i style="width:85%"></i></div></div>
        <div class="skill"><span>Motion básico</span><div class="bar"><i style="width:60%"></i></div></div>
      </div>
    </div>
  </section>

  <!-- SERVIÇOS -->
  <section id="servicos" class="section services">
    <div class="section-head">
      <span class="eyebrow">02 — Serviços</span>
      <h2>O que posso criar pra você</h2>
    </div>
    <div class="service-grid">
      <article class="service-card">
        <div class="service-icon">&#127912;</div>
        <h3>Ilustração Digital</h3>
        <p>Ilustrações personalizadas para redes sociais, livros, posters e produtos digitais.</p>
        <p class="price">A partir de <strong>R$ 250</strong></p>
        <a href="#contato" class="link">Solicitar orçamento &rarr;</a>
      </article>
      <article class="service-card featured">
        <span class="tag-best">Mais pedido</span>
        <div class="service-icon">&#10022;</div>
        <h3>Identidade Visual</h3>
        <p>Logo, paleta, tipografia e manual de marca completo para sua empresa ou projeto.</p>
        <p class="price">A partir de <strong>R$ 1.200</strong></p>
        <a href="#contato" class="link">Solicitar orçamento &rarr;</a>
      </article>
      <article class="service-card">
        <div class="service-icon">&#128241;</div>
        <h3>UI Design</h3>
        <p>Interfaces para apps e sites: do wireframe ao layout final pronto para o dev.</p>
        <p class="price">A partir de <strong>R$ 800</strong></p>
        <a href="#contato" class="link">Solicitar orçamento &rarr;</a>
      </article>
      <article class="service-card">
        <div class="service-icon">&#128444;</div>
        <h3>Posts &amp; Social Media</h3>
        <p>Pacotes de posts, capas e stories com identidade consistente para sua marca.</p>
        <p class="price">A partir de <strong>R$ 400</strong></p>
        <a href="#contato" class="link">Solicitar orçamento &rarr;</a>
      </article>
    </div>
  </section>

  <!-- PORTFÓLIO -->
  <section id="portfolio" class="section portfolio">
    <div class="section-head">
      <span class="eyebrow">03 — Portfólio</span>
      <h2>Projetos recentes</h2>
    </div>
    <div class="portfolio-grid" id="portfolioGrid"></div>
  </section>

  <!-- PROCESSO -->
  <section class="section process">
    <div class="section-head">
      <span class="eyebrow">04 — Como trabalho</span>
      <h2>Um processo simples, do briefing à entrega</h2>
    </div>
    <div class="steps">
      <div class="step"><span class="step-n">01</span><h4>Briefing</h4><p>Conversamos sobre o seu projeto, objetivos e referências.</p></div>
      <div class="step"><span class="step-n">02</span><h4>Proposta</h4><p>Envio escopo, prazo e investimento em até 48h.</p></div>
      <div class="step"><span class="step-n">03</span><h4>Criação</h4><p>Desenvolvo o projeto com check-ins durante o processo.</p></div>
      <div class="step"><span class="step-n">04</span><h4>Entrega</h4><p>Arquivos finais organizados + suporte pós-entrega.</p></div>
    </div>
  </section>

  <!-- DEPOIMENTOS -->
  <section id="depoimentos" class="section testimonials">
    <div class="section-head">
      <span class="eyebrow">05 — Depoimentos</span>
      <h2>O que dizem por aí</h2>
    </div>
    <div class="testi-grid">
      <blockquote>
        <p>A Grace entendeu nossa marca como ninguém. Entregou muito além do que esperávamos.</p>
        <footer>— Marina S., Atelier Lumen</footer>
      </blockquote>
      <blockquote>
        <p>Profissional, criativa e super pontual. Já contratei três vezes e vou contratar de novo.</p>
        <footer>— Rafael T., Mira App</footer>
      </blockquote>
      <blockquote>
        <p>As ilustrações deram uma identidade única pro nosso projeto. Recomendo demais.</p>
        <footer>— Juliana M., Café Petricor</footer>
      </blockquote>
    </div>
  </section>

  <!-- CONTATO -->
  <section id="contato" class="section contact">
    <div class="contact-wrap">
      <div class="contact-left">
        <span class="eyebrow light">06 — Vamos conversar</span>
        <h2>Tem um projeto em mente?</h2>
        <p>Me conta sua ideia e te respondo em até 24h com um plano sob medida.</p>
        <ul class="contact-info">
          <li>&#9993; grace.courtney@email.com</li>
          <li>&#128241; @grace.designs</li>
          <li>&#127758; Remoto, mundo todo</li>
        </ul>
      </div>
      <form class="contact-form" onsubmit="handleSubmit(event)">
        <div class="field"><label>Nome</label><input required type="text" placeholder="Seu nome" /></div>
        <div class="field"><label>Email</label><input required type="email" placeholder="voce@email.com" /></div>
        <div class="field"><label>Tipo de projeto</label>
          <select required>
            <option value="">Selecione...</option>
            <option>Identidade Visual</option>
            <option>Ilustração Digital</option>
            <option>UI Design</option>
            <option>Social Media</option>
            <option>Outro</option>
          </select>
        </div>
        <div class="field"><label>Conta sobre seu projeto</label><textarea required rows="4" placeholder="Objetivos, prazo, referências..."></textarea></div>
        <button type="submit" class="btn btn-primary full">Enviar mensagem &rarr;</button>
        <p class="form-note" id="formNote"></p>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="foot-top">
      <div>
        <a href="#" class="logo">Grace<span>.</span></a>
        <p>Designer digital · Freelancer disponível</p>
      </div>
      <div class="foot-links">
        <a href="#sobre">Sobre</a>
        <a href="#servicos">Serviços</a>
        <a href="#portfolio">Portfólio</a>
        <a href="#contato">Contato</a>
        <a href="gerenciar.html">Gerenciar</a>
      </div>
    </div>
    <p class="foot-bottom">&copy; 2026 Grace Courtney · Feito com &#128156; e muito café</p>
  </footer>

  <script src="{{ asset('portfolio.js') }}"></script>
  <script src="{{ asset('script.js') }}"></script>
</body>
</html>
