const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

document.getElementById('btn-mobile').addEventListener('click', function() {
    const nav = document.getElementById('nav');
    const btn = document.getElementById('btn-mobile');
    
    nav.classList.toggle('active');
    
    // Atualizar o aria-expanded para acessibilidade
    const isExpanded = nav.classList.contains('active');
    btn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
});

