// ===== Página de gerenciamento (CRUD) =====
let editingSlug = null;
let selectedGradient = GRADIENTS[0];

const modal = document.getElementById("modal");
const grid = document.getElementById("manageGrid");

function render() {
  const projects = getProjects();
  document.getElementById("count").textContent =
    `As alterações ficam salvas neste navegador. ${projects.length} projeto${projects.length === 1 ? "" : "s"} no total.`;

  if (projects.length === 0) {
    grid.innerHTML = '<p class="empty">Nenhum projeto ainda. Clique em "Novo projeto" para começar.</p>';
    return;
  }

  grid.innerHTML = projects.map(p => `
    <article class="manage-card">
      <div class="manage-thumb" style="background:${p.gradient}">${p.span} col</div>
      <div class="manage-body">
        <h4>${esc(p.title)}</h4>
        <span class="cat">${esc(p.category)}</span>
        <div class="manage-actions">
          <button class="btn-mini" data-edit="${p.slug}">Editar</button>
          <button class="btn-mini danger" data-del="${p.slug}">Excluir</button>
        </div>
      </div>
    </article>
  `).join("");

  grid.querySelectorAll("[data-edit]").forEach(b =>
    b.addEventListener("click", () => openEdit(b.getAttribute("data-edit"))));
  grid.querySelectorAll("[data-del]").forEach(b =>
    b.addEventListener("click", () => removeProject(b.getAttribute("data-del"))));
}

function esc(s) {
  return String(s).replace(/[&<>"']/g, c => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]));
}

function buildSwatches() {
  const wrap = document.getElementById("swatches");
  wrap.innerHTML = GRADIENTS.map(g =>
    `<div class="swatch${g === selectedGradient ? " active" : ""}" data-g="${g}" style="background:${g}"></div>`
  ).join("");
  wrap.querySelectorAll(".swatch").forEach(s =>
    s.addEventListener("click", () => {
      selectedGradient = s.getAttribute("data-g");
      buildSwatches();
    }));
}

function openModal(title) {
  document.getElementById("modalTitle").textContent = title;
  buildSwatches();
  modal.classList.add("open");
}

function openCreate() {
  editingSlug = null;
  selectedGradient = GRADIENTS[0];
  document.getElementById("fTitle").value = "";
  document.getElementById("fCategory").value = "";
  document.getElementById("fSpan").value = "1";
  openModal("Novo projeto");
}

function openEdit(slug) {
  const p = getProjects().find(x => x.slug === slug);
  if (!p) return;
  editingSlug = slug;
  selectedGradient = p.gradient;
  document.getElementById("fTitle").value = p.title;
  document.getElementById("fCategory").value = p.category;
  document.getElementById("fSpan").value = String(p.span);
  openModal("Editar projeto");
}

function closeModal() { modal.classList.remove("open"); }

function save() {
  const title = document.getElementById("fTitle").value.trim();
  const category = document.getElementById("fCategory").value.trim();
  const span = Number(document.getElementById("fSpan").value);
  if (!title || !category) {
    alert("Preencha título e categoria.");
    return;
  }
  const list = getProjects();
  if (editingSlug) {
    const i = list.findIndex(p => p.slug === editingSlug);
    if (i !== -1) list[i] = { ...list[i], title, category, span, gradient: selectedGradient };
  } else {
    list.push({ slug: uniqueSlug(title), title, category, span, gradient: selectedGradient });
  }
  saveProjects(list);
  closeModal();
  render();
}

function removeProject(slug) {
  const p = getProjects().find(x => x.slug === slug);
  if (!p) return;
  if (confirm(`Excluir "${p.title}"? Essa ação não pode ser desfeita.`)) {
    saveProjects(getProjects().filter(x => x.slug !== slug));
    render();
  }
}

document.getElementById("newBtn").addEventListener("click", openCreate);
document.getElementById("saveBtn").addEventListener("click", save);
document.getElementById("cancelBtn").addEventListener("click", closeModal);
document.getElementById("restoreBtn").addEventListener("click", () => {
  if (confirm("Restaurar a lista padrão? Suas alterações serão descartadas.")) {
    resetProjects();
    render();
  }
});
modal.addEventListener("click", e => { if (e.target === modal) closeModal(); });

render();
