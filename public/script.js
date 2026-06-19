// ===== Renderiza o portfólio na home =====
function renderPortfolio() {
  const grid = document.getElementById("portfolioGrid");
  if (!grid) return;
  const projects = getProjects();
  if (projects.length === 0) {
    grid.innerHTML = '<p class="empty">Nenhum projeto cadastrado ainda.</p>';
    return;
  }
  grid.innerHTML = projects.map(p => `
    <div class="proj span-${p.span}" style="background:${p.gradient}">
      <div class="proj-overlay">
        <h4>${escapeHtml(p.title)}</h4>
        <span>${escapeHtml(p.category)}</span>
      </div>
    </div>
  `).join("");
}

function escapeHtml(s) {
  return String(s).replace(/[&<>"']/g, c => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]));
}

// Menu mobile
const menuBtn = document.getElementById("menuBtn");
if (menuBtn) {
  menuBtn.addEventListener("click", () => {
    document.querySelector(".nav-links").classList.toggle("open");
  });
  document.querySelectorAll(".nav-links a").forEach(a => {
    a.addEventListener("click", () => document.querySelector(".nav-links").classList.remove("open"));
  });
}

// Form submit (simulado)
function handleSubmit(e) {
  e.preventDefault();
  const note = document.getElementById("formNote");
  note.textContent = "\u2713 Mensagem enviada! A Grace responde em até 24h.";
  e.target.reset();
  setTimeout(() => (note.textContent = ""), 6000);
}

// Animação de entrada ao scroll
function initReveal() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll(".section, .service-card, .proj, blockquote, .step").forEach(el => {
    el.style.opacity = "0";
    el.style.transform = "translateY(30px)";
    el.style.transition = "opacity .8s ease, transform .8s ease";
    observer.observe(el);
  });
}

renderPortfolio();
initReveal();
