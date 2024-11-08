document.addEventListener("DOMContentLoaded", function () {
  const btnMobile = document.getElementById("btn-mobile");
  const nav = document.getElementById("nav");

  btnMobile.addEventListener("click", function () {
      nav.classList.toggle("active");

      // Alternar o estado do botão para "menu aberto" ou "menu fechado"
      const expanded = btnMobile.getAttribute("aria-expanded") === "true";
      btnMobile.setAttribute("aria-expanded", !expanded);
  });
});

