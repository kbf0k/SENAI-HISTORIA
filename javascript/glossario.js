const letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    let novoConteudo, botaoVoltar, letraAnterior, proximaLetra;

    const pageContent = document.getElementById('page-content');
    const paginationContainer = document.querySelector('.pagination');
    const btnInicio = document.getElementById('inicio');
    const btnFim = document.getElementById('fim');
    const btnAnterior = document.getElementById('anterior');
    const btnProximo = document.getElementById('proximo');
    const totalPages = 15;
    const maxVisiblePages = 10;
    let currentPage = 1;

    const pageContents = {
      1: "<p><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.<br><br><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.</p>",
      2: "<p><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.<br><br><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
      3: "<p>Página 3 com estilo verde</p><ul><li>Item 1</li><li>Item 2</li></ul>",
      4: "<p>Página 4: Borda azul pontilhada</p>",
      5: "<p>Página 5 com texto em itálico.</p>",
      6: "<p>Página 6 em negrito com cor marrom escura.</p>",
      7: "<p>Página 7: Todo o texto em maiúsculas</p>",
      8: "<p>Página 8 com fundo azul claro.</p>",
      9: "<p>Página 9 com cor roxa e texto grande.</p>",
      10: "<p>Página 10 com gradiente de fundo.</p>",
      11: "<p>Página 11 com borda pontilhada marrom.</p>",
      12: "<p>Página 12: Fundo verde claro e fonte monoespaçada.</p>",
      13: "<p>Página 13 usando fonte serifada.</p>",
      14: "<p>Página 14 com cor rosa e fonte maior.</p>",
      15: "<p>Página 15 alinhada à esquerda.</p>"
    }

    function updatePageContent(page) {
      pageContent.innerHTML = pageContents[page] || "<p>Conteúdo não encontrado</p>";
      pageContent.className = 'page-content'; // Reseta as classes para o estilo padrão
      pageContent.classList.add(`page-${page}`);
    }

    function renderPageLinks(startPage) {
      const pageLinks = Array.from(paginationContainer.children).filter(link => link !== btnInicio && link !== btnFim && link !== btnAnterior && link !== btnProximo);
      pageLinks.forEach(link => link.remove());

      let endPage = Math.min(startPage + maxVisiblePages - 1, totalPages);

      for (let i = startPage; i <= endPage; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = "#";
        pageLink.textContent = i;
        pageLink.dataset.page = i;
        if (i === currentPage) {
          pageLink.classList.add('active');
        }
        paginationContainer.insertBefore(pageLink, btnProximo);
      }
    }

    paginationContainer.addEventListener('click', function(event) {
      event.preventDefault();
      const target = event.target;
      if (target.tagName !== 'A') return;

      let newPage = target.dataset.page;

      if (newPage === 'prev') {
        newPage = Math.max(1, currentPage - 1);
      } else if (newPage === 'next') {
        newPage = Math.min(totalPages, currentPage + 1);
      } else if (newPage === '1') {
        newPage = 1;
      } else if (newPage === '15') {
        newPage = 15;
      } else {
        newPage = parseInt(newPage);
      }

      if (newPage !== currentPage) {
        currentPage = newPage;
        updatePageContent(currentPage);
        let startPage = Math.max(1, Math.min(currentPage - Math.floor(maxVisiblePages / 2), totalPages - maxVisiblePages + 1));
        renderPageLinks(startPage);
      }
    });

    renderPageLinks(1);
    updatePageContent(1);

    // Seus conteúdos por letra
  const contentByLetter = {
    A: "<p><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
    B: "<p><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.<br><br><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bloqueio Continental:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.</p>",
    C: "<p><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Colonialismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Comunismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Cruzadas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Crise de 1929:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    D: "<p><b>Declaração de Direitos Humanos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Democratização:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Ditadura:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Diplomacia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Doutrina:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    E: "<p><b>Era Napoleônica:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Era Vargas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Escravismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado de Bem-Estar Social:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado-Nação:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Expansão Marítima:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    F: "<p><b>Fascismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Federalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Feudalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    G: "<p><b>Golpe de Estado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Grandes Navegações:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra Civil Espanhola:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra das Coreias:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra de Canudos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra do Vietnã:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerras Napoleônicas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    H: "<p><b>Hegemonia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>História:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Holocausto:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    I: "<p><b>Iluminismo:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.<br><br><b>Imperialismo</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Império Bizantino:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Império Romano:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Independência do Brasil:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Independência dos Estados Unidos:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Invasão da Polônia:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.</p>",
    J: "<p><b>Jovem Guarda:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Jusnaturalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    K: "<p><b>KGB:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    L: "<p><b>Liberalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Liga das Nações:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Livre Mercado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    M: "<p><b>Mercantilismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Modernismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Monarquia Inglesa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Movimentos Populares:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Muro de Berlim:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    N: "<p><b>Nacionalismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Napoleão Bonaparte:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Nazismo:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Neoliberalismo:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
    O: "<p><b>Ocidental:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>ONU:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Órgão:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Oriental:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
    P: "<p><b>Plano Marshall:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Plano Molotov:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Política:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Positivismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Primavera Árabe:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Primeira Guerra Mundial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Proletariado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    Q: "<p><b>Queda de Constantinopla:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Queda do Muro de Berlim:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    R: "<p><b>Rebelião:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Reconquista Espanhola:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Reforma Agrária:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Reforma Gregoriana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Reforma Luterana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Reforma Protestante:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Regime Militar no Brasil:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Renascimento:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolta dos Canudos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Americana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Cubana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução dos Cravos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Francesa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Gloriosa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Industrial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Pernambucana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Russa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Roma Antiga:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    S: "<p><b>Século das Luzes:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Segunda Guerra Mundial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Servidão:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Sistema Colonial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Sistema Feudal:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Socialismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Sociedade Estamental:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Sociedade Feudal:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Sociedade Medieval:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    T: "<p><b>Teoria Geocêntrica:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Teoria Heliocêntrica:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tratado de Kyoto:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tratado de Tordesilhas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tratado de Versalhes:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tratado de Viena:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tríplice Aliança:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Tríplice Entente:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    U: "<p><b>União Europeia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>União Soviética:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Unificação Alemã:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
    // Adicione mais letras e conteúdos conforme necessário
  };

  // Função para atualizar o conteúdo com base na letra selecionada
  function updateContentByLetter(letter) {
    const content = contentByLetter[letter] || "<p>Não há conteúdo disponível para esta letra.</p>";
    pageContent.innerHTML = content;
  }

  // Adiciona o evento de clique para cada letra do alfabeto
  document.querySelectorAll('.alphabet-container a').forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      const letter = link.textContent;
      updateContentByLetter(letter);
    });
  });

  function removerNavPags() {
            const navPags = document.getElementById('navPags');
            
            if (navPags) navPags.remove();
        }

    function atualizarConteudo(letraAtual) {

      removerElementos();

      const navLetras = document.getElementById('navLetras');

      novoConteudo = updateContentByLetter(letraAtual);

            letraAnterior = document.createElement('button');
            letraAnterior.id = 'letraAnterior';
            letraAnterior.textContent = 'Letra anterior';
            letraAnterior.style.marginTop = '20px';
            letraAnterior.style.padding = '10px 20px';
            letraAnterior.style.border = '1px solid #665d50';
            letraAnterior.style.backgroundColor = '#f9f9f9';
            letraAnterior.style.borderRadius = '5px';
            letraAnterior.style.textAlign = 'center';
            letraAnterior.style.fontSize = '16px';
            letraAnterior.style.cursor = 'pointer';
            

            botaoVoltar = document.createElement('button');
            botaoVoltar.textContent = 'Voltar';
            botaoVoltar.style.marginTop = '20px';
            botaoVoltar.style.padding = '10px 20px';
            botaoVoltar.style.border = 'none';
            botaoVoltar.style.backgroundColor = '#d4af37';
            botaoVoltar.style.border = '1px solid #665d50';
            botaoVoltar.style.color = 'white';
            botaoVoltar.style.borderRadius = '5px';
            botaoVoltar.style.fontSize = '16px';
            botaoVoltar.style.cursor = 'pointer';
            navLetras.appendChild(botaoVoltar);

            botaoVoltar.addEventListener('click', function() {
                location.reload();
            });

            proximaLetra = document.createElement('button');
            proximaLetra.id = 'proximaLetra';
            proximaLetra.textContent = 'Próxima letra';
            proximaLetra.style.marginTop = '20px';
            proximaLetra.style.padding = '10px 20px';
            proximaLetra.style.border = '1px solid #665d50';
            proximaLetra.style.backgroundColor = '#f9f9f9';
            proximaLetra.style.borderRadius = '5px';
            proximaLetra.style.fontSize = '16px';
            proximaLetra.style.cursor = 'pointer';

            const indexAtual = letras.indexOf(letraAtual);

            if (indexAtual > 0) {
                letraAnterior.innerHTML = '&laquo; ' + letras[indexAtual - 1];
                letraAnterior.addEventListener('click', () => atualizarConteudo(letras[indexAtual - 1]));
            } else {
                letraAnterior.innerHTML = 'Início' || 'A';
                letraAnterior.disabled = true; // Desabilita o botão se for o primeiro
            }

            if (indexAtual < letras.length - 1) {
                proximaLetra.innerHTML = letras[indexAtual + 1] + ' &raquo;';
                proximaLetra.addEventListener('click', () => atualizarConteudo(letras[indexAtual + 1]));
            } else {
                proximaLetra.innerHTML = 'Fim' || 'Z';
                proximaLetra.disabled = true; // Desabilita o botão se for o último
            }

            navLetras.prepend(letraAnterior);
            navLetras.appendChild(proximaLetra);
    }

    function removerElementos() {
            if (novoConteudo) novoConteudo.remove();
            if (botaoVoltar) botaoVoltar.remove();
            if (letraAnterior) letraAnterior.remove();
            if (proximaLetra) proximaLetra.remove();
        }


  document.getElementById('botaoA').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('A');
  });
  
  document.getElementById('botaoB').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('B');
  });

  document.getElementById('botaoC').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('C');
  });

  document.getElementById('botaoD').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('D');
  });

  document.getElementById('botaoE').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('E');
  });

  document.getElementById('botaoF').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('F');
  });

  document.getElementById('botaoG').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('G');
  });

  document.getElementById('botaoH').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('H');
  });

  document.getElementById('botaoI').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('I');
  });

  document.getElementById('botaoJ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('J');
  });

  document.getElementById('botaoK').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('K');
  });

  document.getElementById('botaoL').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('L');
  });

  document.getElementById('botaoM').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('M');
  });

  document.getElementById('botaoN').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('N');
  });

  document.getElementById('botaoO').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('O');
  });

  document.getElementById('botaoP').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('P');
  });

  document.getElementById('botaoQ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Q');
  });

  document.getElementById('botaoR').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('R');
  });

  document.getElementById('botaoS').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('S');
  });

  document.getElementById('botaoT').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('T');
  });

  document.getElementById('botaoU').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('U');
  });

  document.getElementById('botaoV').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('V');
  });

  document.getElementById('botaoW').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('W');
  });

  document.getElementById('botaoX').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('X');
  });

  document.getElementById('botaoY').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Y');
  });

  document.getElementById('botaoZ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Z');
  });

  const botoesAlfa = document.querySelectorAll('.botaoABC');
  let indexAlfa = 0;

  function selecionarLetra(index) {
    // Remove a classe 'selected' de todos os links
    botoesAlfa.forEach(link => link.classList.remove('selected'));

    // Adiciona a classe 'selected' ao link correspondente ao índice
    botoesAlfa[index].classList.add('selected');
  }

  botoesAlfa.forEach((botaoABC, index) => {
    botaoABC.addEventListener('click', function(event) {
      event.preventDefault();
      indexAlfa = index; // Atualiza o índice atual
      selecionarLetra(indexAlfa);
    });
  });

  document.getElementById('letraAnterior').addEventListener('click', function() {
    if (indexAlfa > 0) {
      indexAlfa--; // Diminui o índice para ir à esquerda
      selecionarLetra(indexAlfa);
    }
  });

  document.getElementById('proximaLetra').addEventListener('click', function() {
    if (indexAlfa < botoesAlfa.length - 1) {
      indexAlfa++; // Aumenta o índice para ir à direita
      selecionarLetra(indexAlfa);
    }
  });