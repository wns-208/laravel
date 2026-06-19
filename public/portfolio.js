// ===== Portfólio: armazenamento local (localStorage) =====
const STORAGE_KEY = "grace-portfolio-projects";

const SEED = [
  { slug: "atelier-lumen", title: "Atelier Lumen", category: "Identidade Visual", gradient: "linear-gradient(135deg, #6b46c1, #ec4899)", span: 2 },
  { slug: "mira-app", title: "Mira App", category: "UI Design", gradient: "linear-gradient(135deg, #f59e0b, #ec4899)", span: 1 },
  { slug: "colecao-solsticio", title: "Coleção Solstício", category: "Ilustração", gradient: "linear-gradient(135deg, #14b8a6, #6b46c1)", span: 1 },
  { slug: "cafe-petricor", title: "Café Petricor", category: "Branding", gradient: "linear-gradient(135deg, #ec4899, #f59e0b)", span: 1 },
  { slug: "notas-de-croche", title: "Notas de Crochê", category: "Social Media", gradient: "linear-gradient(135deg, #6b46c1, #14b8a6)", span: 2 },
  { slug: "estudio-23", title: "Estúdio 23", category: "Identidade Visual", gradient: "linear-gradient(135deg, #1a1625, #6b46c1)", span: 3 },
];

const GRADIENTS = [
  "linear-gradient(135deg, #6b46c1, #ec4899)",
  "linear-gradient(135deg, #f59e0b, #ec4899)",
  "linear-gradient(135deg, #14b8a6, #6b46c1)",
  "linear-gradient(135deg, #ec4899, #f59e0b)",
  "linear-gradient(135deg, #6b46c1, #14b8a6)",
  "linear-gradient(135deg, #1a1625, #6b46c1)",
];

function getProjects() {
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    if (!raw) return SEED.slice();
    const parsed = JSON.parse(raw);
    return Array.isArray(parsed) ? parsed : SEED.slice();
  } catch {
    return SEED.slice();
  }
}

function saveProjects(list) {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
}

function resetProjects() {
  localStorage.removeItem(STORAGE_KEY);
}

function slugify(value) {
  return value.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "")
    .replace(/[^a-z0-9]+/g, "-").replace(/(^-|-$)/g, "");
}

function uniqueSlug(title, ignore) {
  const base = slugify(title) || "projeto";
  const taken = new Set(getProjects().filter(p => p.slug !== ignore).map(p => p.slug));
  let slug = base, i = 2;
  while (taken.has(slug)) slug = base + "-" + (i++);
  return slug;
}
